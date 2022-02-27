# Sounds

We add `VanillaSounds`, so you never touch protocol again!

# Usage

```php
use DiamondStrider1\Sounds\VanillaSounds;

$sound = VanillaSounds::NOTE_BELL();
$world->addSound($position, $sound, $players);
```

# How it works

By running `composer generate_sounds` we generate `SoundIds` and `VanillaSounds`.

We first download a vanilla resource pack from Microsoft. Then we search the pack's
`/sounds` directory for sound files. We then generate source code from the file names.
