<?php

declare(strict_types=1);

/**
 * Converts the sound name (ex: step.stem) to a const name (ex: STEP_STEM).
 */
function soundNameToConstCase(string $name): string
{
    return strtoupper(str_replace(['.', '-'], "_", $name));
}

/**
 * Used to convert file paths to corresponding sound names.
 *
 * ```php
 * $file = "sounds/step/wood6.fsb";
 * $name = slashToPeriods($file);
 * assert($name === "step.wood6");
 * ```
 */
function slashToPeriods(string $name): string {
    $name = preg_replace('/.*sounds\//', "", $name);
    $name = preg_replace('/\..*$/', "", $name);
    return preg_replace('/\//', ".", $name);
}

/**
 * A generator over all the sound names in pack.zip
 *
 * @return string[]
 */
function soundNames(): array {
    $zip = new ZipArchive;
    $zip->open(__DIR__ . "/../pack.zip");

    // Many files can correspond to the same sound.
    // Files here won't get ignored for having a number
    $exceptions = [
        "random.pop2" => true,
        "item.trident.riptide_1" => true,
        "item.trident.riptide_2" => true,
        "item.trident.riptide_3" => true,
        "record.11" => true,
        "record.13" => true,
    ];

    $return = [];
    $files = $zip->count();
    for ($i = 0; $i < $files; $i++) {
        $name = $zip->getNameIndex($i);
        if (preg_match("/sounds\/.*\./", $name)) {
            $name = slashToPeriods($name);
            // Check if this sound has many files
            if (!isset($exceptions[$name])
                && preg_match('/\d$/', $name)
            ) {
                if (!preg_match('/1$/', $name)) {
                    continue;
                }
                // This strips the "1". Ex: step.stem1 -> step.stem
                $name = substr($name, 0, strlen($name) - 1);
            }
            $return[] = $name;
        }
    }
    return $return;
}

$sounds = soundNames();
$soundCount = count($sounds);

$soundIds = fopen(__DIR__ . "/../src/DiamondStrider1/Sounds/SoundIds.php", "w");
fwrite($soundIds, <<<EOT
<?php

declare(strict_types=1);

namespace DiamondStrider1\Sounds;

final class SoundIds
{

EOT);
foreach ($sounds as $sound) {
    $constSound = soundNameToConstCase($sound);
    fwrite($soundIds, <<<EOT
        public const $constSound = "$sound";

    EOT);
}
fwrite($soundIds, <<<EOT
}

EOT);
fclose($soundIds);

$vanillaSounds = fopen(__DIR__ . "/../src/DiamondStrider1/Sounds/VanillaSounds.php", "w");
fwrite($vanillaSounds, <<<EOT
<?php

declare(strict_types=1);

namespace DiamondStrider1\Sounds;

final class VanillaSounds
{

EOT);
foreach ($sounds as $i => $sound) {
    $constSound = soundNameToConstCase($sound);
    fwrite($vanillaSounds, <<<EOT
        public static function $constSound(): SoundImpl {
            return new SoundImpl(SoundIds::$constSound);
        }

    EOT . ($i === $soundCount - 1 ? "" : "\n"));
}
fwrite($vanillaSounds, <<<EOT
}

EOT);
fclose($vanillaSounds);
