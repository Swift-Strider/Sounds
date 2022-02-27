<?php

declare(strict_types=1);

namespace DiamondStrider1\Sounds;

use pocketmine\math\Vector3;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\world\sound\Sound;

/**
 * This sound has volume and pitch properties to be tuned.
 * You shouldn't create an instance of this class directly,
 * instead use VanillaSounds.
 *
 * @see VanillaSounds
 */
final class InternalSound implements Sound
{
    private float $volume = 1;
    private float $pitch = 1;
    public function __construct(
        private string $name,
    ) {}

    public function getVolume(): float
    {
        return $this->volume;
    }

    public function setVolume(float $volume): void
    {
        $this->volume = $volume;
    }

    public function getPitch(): float
    {
        return $this->pitch;
    }
    public function setPitch(float $pitch): void
    {
        $this->pitch = $pitch;
    }

    public function encode(Vector3 $pos): array
    {
        return [PlaySoundPacket::create($this->name, $pos->getFloorX(), $pos->getFloorY(), $pos->getFloorZ(), $this->volume, $this->pitch)];
    }
}
