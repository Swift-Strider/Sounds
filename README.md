# Sounds

This library adds sound APIs for PocketMine-MP plugins. Sounds from Minecraft version 1.19.0 are supported.

# Usage

Sounds has an API similar to PocketMine's item and block APIs. You can get an `SoundImpl` (which implements PocketMine's Sound interface) by using the `VanillaSounds::XXX()` methods.

```php
use DiamondStrider1\Sounds\VanillaSounds;

$sound = VanillaSounds::NOTE_BELL();
$sound->setVolume(2);
$sound->setPitch(2);
$currentVolume = $sound->getVolume();
$currentPitch = $sound->getPitch();
$world->addSound($position, $sound, $players);
```

You can also use `SoundFactory`, if the sound you want is not registered by this library.

```php
use DiamondStrider1\Sounds\SoundFactory;

$sound = SoundFactory::create("my.custom.sound", volume: 1, pitch: 1);
$world->addSound($position, $sound, $players);

$anotherSound = SoundFactory::create("my.custom.sound2");
$anotherSound->setVolume(2);
$world->addSound($position, $anotherSound, $players);
```

This library also has constants for the ids of sounds, located in `SoundIds`!

```php
use DiamondStrider1\Sounds\SoundIds;

$pigStep = SoundIds::MOB_PIG_STEP
```

*(side note: Don't confuse mob.pig.step with the true pig step music disc music)*

# How it works

By running `composer generate_sounds` we generate `SoundIds` and `VanillaSounds`.

We first download a vanilla resource pack from Microsoft. Then we search the pack's
`/sounds` directory for sound files. We then generate source code from the file names.
