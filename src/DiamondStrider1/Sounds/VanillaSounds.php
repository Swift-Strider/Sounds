<?php

declare(strict_types=1);

namespace DiamondStrider1\Sounds;

use pocketmine\world\sound\Sound;

final class VanillaSounds
{
    public static function BLOCK_AMETHYST_SHIMMER(): Sound {
        return new InternalSound(SoundIds::BLOCK_AMETHYST_SHIMMER);
    }

    public static function BLOCK_BARREL_CLOSE(): Sound {
        return new InternalSound(SoundIds::BLOCK_BARREL_CLOSE);
    }

    public static function BLOCK_BEACON_ACTIVATE(): Sound {
        return new InternalSound(SoundIds::BLOCK_BEACON_ACTIVATE);
    }

    public static function BLOCK_BEACON_AMBIENT(): Sound {
        return new InternalSound(SoundIds::BLOCK_BEACON_AMBIENT);
    }

    public static function BLOCK_BEACON_DEACTIVATE(): Sound {
        return new InternalSound(SoundIds::BLOCK_BEACON_DEACTIVATE);
    }

    public static function BLOCK_BEEHIVE_ENTER(): Sound {
        return new InternalSound(SoundIds::BLOCK_BEEHIVE_ENTER);
    }

    public static function BLOCK_BEEHIVE_EXIT(): Sound {
        return new InternalSound(SoundIds::BLOCK_BEEHIVE_EXIT);
    }

    public static function BLOCK_BEEHIVE_SHEAR(): Sound {
        return new InternalSound(SoundIds::BLOCK_BEEHIVE_SHEAR);
    }

    public static function BLOCK_CONDUIT_ACTIVATE(): Sound {
        return new InternalSound(SoundIds::BLOCK_CONDUIT_ACTIVATE);
    }

    public static function BLOCK_CONDUIT_AMBIENT(): Sound {
        return new InternalSound(SoundIds::BLOCK_CONDUIT_AMBIENT);
    }

    public static function BLOCK_CONDUIT_DEACTIVATE(): Sound {
        return new InternalSound(SoundIds::BLOCK_CONDUIT_DEACTIVATE);
    }

    public static function BLOCK_ENDERCHEST_CLOSE(): Sound {
        return new InternalSound(SoundIds::BLOCK_ENDERCHEST_CLOSE);
    }

    public static function BLOCK_ENDERCHEST_OPEN(): Sound {
        return new InternalSound(SoundIds::BLOCK_ENDERCHEST_OPEN);
    }

    public static function BLOCK_END_PORTAL_ENDPORTAL(): Sound {
        return new InternalSound(SoundIds::BLOCK_END_PORTAL_ENDPORTAL);
    }

    public static function BLOCK_PERMISSIONS_SHIMMER_SHIMMERBLOCK(): Sound {
        return new InternalSound(SoundIds::BLOCK_PERMISSIONS_SHIMMER_SHIMMERBLOCK);
    }

    public static function BLOCK_SHULKER_BOX_CLOSE(): Sound {
        return new InternalSound(SoundIds::BLOCK_SHULKER_BOX_CLOSE);
    }

    public static function BLOCK_SHULKER_BOX_OPEN(): Sound {
        return new InternalSound(SoundIds::BLOCK_SHULKER_BOX_OPEN);
    }

    public static function BUBBLES_UPWARDS_INSIDE(): Sound {
        return new InternalSound(SoundIds::BUBBLES_UPWARDS_INSIDE);
    }

    public static function BUBBLES_WHIRLPOOL_INSIDE(): Sound {
        return new InternalSound(SoundIds::BUBBLES_WHIRLPOOL_INSIDE);
    }

    public static function CROSSBOW_LOADING_END(): Sound {
        return new InternalSound(SoundIds::CROSSBOW_LOADING_END);
    }

    public static function CROSSBOW_LOADING_START(): Sound {
        return new InternalSound(SoundIds::CROSSBOW_LOADING_START);
    }

    public static function DAMAGE_FALLBIG(): Sound {
        return new InternalSound(SoundIds::DAMAGE_FALLBIG);
    }

    public static function DAMAGE_FALLSMALL(): Sound {
        return new InternalSound(SoundIds::DAMAGE_FALLSMALL);
    }

    public static function ELYTRA_ELYTRA_LOOP(): Sound {
        return new InternalSound(SoundIds::ELYTRA_ELYTRA_LOOP);
    }

    public static function FIRE_FIRE(): Sound {
        return new InternalSound(SoundIds::FIRE_FIRE);
    }

    public static function FIRE_IGNITE(): Sound {
        return new InternalSound(SoundIds::FIRE_IGNITE);
    }

    public static function ITEM_DYE_DYE(): Sound {
        return new InternalSound(SoundIds::ITEM_DYE_DYE);
    }

    public static function ITEM_SPYGLASS_STOP(): Sound {
        return new InternalSound(SoundIds::ITEM_SPYGLASS_STOP);
    }

    public static function ITEM_SPYGLASS_USE(): Sound {
        return new InternalSound(SoundIds::ITEM_SPYGLASS_USE);
    }

    public static function LIQUID_LAVA(): Sound {
        return new InternalSound(SoundIds::LIQUID_LAVA);
    }

    public static function LIQUID_LAVAPOP(): Sound {
        return new InternalSound(SoundIds::LIQUID_LAVAPOP);
    }

    public static function LIQUID_WATER(): Sound {
        return new InternalSound(SoundIds::LIQUID_WATER);
    }

    public static function MINECART_BASE(): Sound {
        return new InternalSound(SoundIds::MINECART_BASE);
    }

    public static function MINECART_INSIDE(): Sound {
        return new InternalSound(SoundIds::MINECART_INSIDE);
    }

    public static function MOB_BAT_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_BAT_DEATH);
    }

    public static function MOB_BAT_TAKEOFF(): Sound {
        return new InternalSound(SoundIds::MOB_BAT_TAKEOFF);
    }

    public static function MOB_BEE_STING(): Sound {
        return new InternalSound(SoundIds::MOB_BEE_STING);
    }

    public static function MOB_BLAZE_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_BLAZE_DEATH);
    }

    public static function MOB_CHICKEN_PLOP(): Sound {
        return new InternalSound(SoundIds::MOB_CHICKEN_PLOP);
    }

    public static function MOB_CREEPER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_CREEPER_DEATH);
    }

    public static function MOB_ENDERDRAGON_END(): Sound {
        return new InternalSound(SoundIds::MOB_ENDERDRAGON_END);
    }

    public static function MOB_ENDERMEN_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_ENDERMEN_DEATH);
    }

    public static function MOB_ENDERMEN_PORTAL(): Sound {
        return new InternalSound(SoundIds::MOB_ENDERMEN_PORTAL);
    }

    public static function MOB_ENDERMEN_STARE(): Sound {
        return new InternalSound(SoundIds::MOB_ENDERMEN_STARE);
    }

    public static function MOB_EVOCATION_ILLAGER_CELEBRATE(): Sound {
        return new InternalSound(SoundIds::MOB_EVOCATION_ILLAGER_CELEBRATE);
    }

    public static function MOB_EVOCATION_ILLAGER_FANGS(): Sound {
        return new InternalSound(SoundIds::MOB_EVOCATION_ILLAGER_FANGS);
    }

    public static function MOB_EVOCATION_ILLAGER_PREPARE_SUMMON(): Sound {
        return new InternalSound(SoundIds::MOB_EVOCATION_ILLAGER_PREPARE_SUMMON);
    }

    public static function MOB_EVOCATION_ILLAGER_PREPARE_WOLOLO(): Sound {
        return new InternalSound(SoundIds::MOB_EVOCATION_ILLAGER_PREPARE_WOLOLO);
    }

    public static function MOB_GHAST_AFFECTIONATE_SCREAM(): Sound {
        return new InternalSound(SoundIds::MOB_GHAST_AFFECTIONATE_SCREAM);
    }

    public static function MOB_GHAST_CHARGE(): Sound {
        return new InternalSound(SoundIds::MOB_GHAST_CHARGE);
    }

    public static function MOB_GHAST_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_GHAST_DEATH);
    }

    public static function MOB_GUARDIAN_ATTACK_LOOP(): Sound {
        return new InternalSound(SoundIds::MOB_GUARDIAN_ATTACK_LOOP);
    }

    public static function MOB_GUARDIAN_CURSE(): Sound {
        return new InternalSound(SoundIds::MOB_GUARDIAN_CURSE);
    }

    public static function MOB_GUARDIAN_ELDER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_GUARDIAN_ELDER_DEATH);
    }

    public static function MOB_GUARDIAN_GUARDIAN_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_GUARDIAN_GUARDIAN_DEATH);
    }

    public static function MOB_GUARDIAN_LAND_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_GUARDIAN_LAND_DEATH);
    }

    public static function MOB_HORSE_ARMOR(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_ARMOR);
    }

    public static function MOB_HORSE_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_DEATH);
    }

    public static function MOB_HORSE_DONKEY_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_DONKEY_DEATH);
    }

    public static function MOB_HORSE_JUMP(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_JUMP);
    }

    public static function MOB_HORSE_LAND(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_LAND);
    }

    public static function MOB_HORSE_LEATHER(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_LEATHER);
    }

    public static function MOB_HORSE_SKELETON_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_SKELETON_DEATH);
    }

    public static function MOB_HORSE_ZOMBIE_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_HORSE_ZOMBIE_DEATH);
    }

    public static function MOB_IRONGOLEM_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_IRONGOLEM_DEATH);
    }

    public static function MOB_IRONGOLEM_REPAIR(): Sound {
        return new InternalSound(SoundIds::MOB_IRONGOLEM_REPAIR);
    }

    public static function MOB_IRONGOLEM_THROW(): Sound {
        return new InternalSound(SoundIds::MOB_IRONGOLEM_THROW);
    }

    public static function MOB_LLAMA_SWAG(): Sound {
        return new InternalSound(SoundIds::MOB_LLAMA_SWAG);
    }

    public static function MOB_PANDA_PRE_SNEEZE(): Sound {
        return new InternalSound(SoundIds::MOB_PANDA_PRE_SNEEZE);
    }

    public static function MOB_PIG_BOOST4LONG(): Sound {
        return new InternalSound(SoundIds::MOB_PIG_BOOST4LONG);
    }

    public static function MOB_PIG_BOOST5LONG(): Sound {
        return new InternalSound(SoundIds::MOB_PIG_BOOST5LONG);
    }

    public static function MOB_PIG_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_PIG_DEATH);
    }

    public static function MOB_PILLAGER_HORN_CELEBRATE(): Sound {
        return new InternalSound(SoundIds::MOB_PILLAGER_HORN_CELEBRATE);
    }

    public static function MOB_RABBIT_BUNNYMURDER(): Sound {
        return new InternalSound(SoundIds::MOB_RABBIT_BUNNYMURDER);
    }

    public static function MOB_SHEEP_SHEAR(): Sound {
        return new InternalSound(SoundIds::MOB_SHEEP_SHEAR);
    }

    public static function MOB_SILVERFISH_KILL(): Sound {
        return new InternalSound(SoundIds::MOB_SILVERFISH_KILL);
    }

    public static function MOB_SKELETON_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_SKELETON_DEATH);
    }

    public static function MOB_SPIDER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_SPIDER_DEATH);
    }

    public static function MOB_VILLAGER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_VILLAGER_DEATH);
    }

    public static function MOB_WANDERING_TRADER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_WANDERING_TRADER_DEATH);
    }

    public static function MOB_WANDERING_TRADER_DRINK_POTION(): Sound {
        return new InternalSound(SoundIds::MOB_WANDERING_TRADER_DRINK_POTION);
    }

    public static function MOB_WITCH_CELEBRATE(): Sound {
        return new InternalSound(SoundIds::MOB_WITCH_CELEBRATE);
    }

    public static function MOB_WITHER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_WITHER_DEATH);
    }

    public static function MOB_WITHER_SHOOT(): Sound {
        return new InternalSound(SoundIds::MOB_WITHER_SHOOT);
    }

    public static function MOB_WITHER_SPAWN(): Sound {
        return new InternalSound(SoundIds::MOB_WITHER_SPAWN);
    }

    public static function MOB_WOLF_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_WOLF_DEATH);
    }

    public static function MOB_WOLF_PANTING(): Sound {
        return new InternalSound(SoundIds::MOB_WOLF_PANTING);
    }

    public static function MOB_WOLF_SHAKE(): Sound {
        return new InternalSound(SoundIds::MOB_WOLF_SHAKE);
    }

    public static function MOB_WOLF_WHINE(): Sound {
        return new InternalSound(SoundIds::MOB_WOLF_WHINE);
    }

    public static function MOB_ZOMBIE_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_ZOMBIE_DEATH);
    }

    public static function MOB_ZOMBIE_REMEDY(): Sound {
        return new InternalSound(SoundIds::MOB_ZOMBIE_REMEDY);
    }

    public static function MOB_ZOMBIE_UNFECT(): Sound {
        return new InternalSound(SoundIds::MOB_ZOMBIE_UNFECT);
    }

    public static function MOB_ZOMBIE_WOODBREAK(): Sound {
        return new InternalSound(SoundIds::MOB_ZOMBIE_WOODBREAK);
    }

    public static function MOB_ZOMBIEPIG_ZPIGDEATH(): Sound {
        return new InternalSound(SoundIds::MOB_ZOMBIEPIG_ZPIGDEATH);
    }

    public static function MOB_ZOMBIE_VILLAGER_DEATH(): Sound {
        return new InternalSound(SoundIds::MOB_ZOMBIE_VILLAGER_DEATH);
    }

    public static function MUSIC_DEFINITIONS(): Sound {
        return new InternalSound(SoundIds::MUSIC_DEFINITIONS);
    }

    public static function NOTE_BANJO(): Sound {
        return new InternalSound(SoundIds::NOTE_BANJO);
    }

    public static function NOTE_BASS(): Sound {
        return new InternalSound(SoundIds::NOTE_BASS);
    }

    public static function NOTE_BASSATTACK(): Sound {
        return new InternalSound(SoundIds::NOTE_BASSATTACK);
    }

    public static function NOTE_BD(): Sound {
        return new InternalSound(SoundIds::NOTE_BD);
    }

    public static function NOTE_BELL(): Sound {
        return new InternalSound(SoundIds::NOTE_BELL);
    }

    public static function NOTE_BIT(): Sound {
        return new InternalSound(SoundIds::NOTE_BIT);
    }

    public static function NOTE_COW_BELL(): Sound {
        return new InternalSound(SoundIds::NOTE_COW_BELL);
    }

    public static function NOTE_DIDGERIDOO(): Sound {
        return new InternalSound(SoundIds::NOTE_DIDGERIDOO);
    }

    public static function NOTE_FLUTE(): Sound {
        return new InternalSound(SoundIds::NOTE_FLUTE);
    }

    public static function NOTE_GUITAR(): Sound {
        return new InternalSound(SoundIds::NOTE_GUITAR);
    }

    public static function NOTE_HARP(): Sound {
        return new InternalSound(SoundIds::NOTE_HARP);
    }

    public static function NOTE_HAT(): Sound {
        return new InternalSound(SoundIds::NOTE_HAT);
    }

    public static function NOTE_ICECHIME(): Sound {
        return new InternalSound(SoundIds::NOTE_ICECHIME);
    }

    public static function NOTE_IRON_XYLOPHONE(): Sound {
        return new InternalSound(SoundIds::NOTE_IRON_XYLOPHONE);
    }

    public static function NOTE_PLING(): Sound {
        return new InternalSound(SoundIds::NOTE_PLING);
    }

    public static function NOTE_SNARE(): Sound {
        return new InternalSound(SoundIds::NOTE_SNARE);
    }

    public static function NOTE_XYLOBONE(): Sound {
        return new InternalSound(SoundIds::NOTE_XYLOBONE);
    }

    public static function PORTAL_PORTAL(): Sound {
        return new InternalSound(SoundIds::PORTAL_PORTAL);
    }

    public static function PORTAL_TRAVEL(): Sound {
        return new InternalSound(SoundIds::PORTAL_TRAVEL);
    }

    public static function PORTAL_TRIGGER(): Sound {
        return new InternalSound(SoundIds::PORTAL_TRIGGER);
    }

    public static function RANDOM_ANVIL_BREAK(): Sound {
        return new InternalSound(SoundIds::RANDOM_ANVIL_BREAK);
    }

    public static function RANDOM_ANVIL_LAND(): Sound {
        return new InternalSound(SoundIds::RANDOM_ANVIL_LAND);
    }

    public static function RANDOM_ANVIL_USE(): Sound {
        return new InternalSound(SoundIds::RANDOM_ANVIL_USE);
    }

    public static function RANDOM_BOW(): Sound {
        return new InternalSound(SoundIds::RANDOM_BOW);
    }

    public static function RANDOM_BREAK(): Sound {
        return new InternalSound(SoundIds::RANDOM_BREAK);
    }

    public static function RANDOM_BURP(): Sound {
        return new InternalSound(SoundIds::RANDOM_BURP);
    }

    public static function RANDOM_CHESTCLOSED(): Sound {
        return new InternalSound(SoundIds::RANDOM_CHESTCLOSED);
    }

    public static function RANDOM_CHESTOPEN(): Sound {
        return new InternalSound(SoundIds::RANDOM_CHESTOPEN);
    }

    public static function RANDOM_CLICK(): Sound {
        return new InternalSound(SoundIds::RANDOM_CLICK);
    }

    public static function RANDOM_DOOR_CLOSE(): Sound {
        return new InternalSound(SoundIds::RANDOM_DOOR_CLOSE);
    }

    public static function RANDOM_DOOR_OPEN(): Sound {
        return new InternalSound(SoundIds::RANDOM_DOOR_OPEN);
    }

    public static function RANDOM_DRINK(): Sound {
        return new InternalSound(SoundIds::RANDOM_DRINK);
    }

    public static function RANDOM_FIZZ(): Sound {
        return new InternalSound(SoundIds::RANDOM_FIZZ);
    }

    public static function RANDOM_FUSE(): Sound {
        return new InternalSound(SoundIds::RANDOM_FUSE);
    }

    public static function RANDOM_HURT(): Sound {
        return new InternalSound(SoundIds::RANDOM_HURT);
    }

    public static function RANDOM_LEVELUP(): Sound {
        return new InternalSound(SoundIds::RANDOM_LEVELUP);
    }

    public static function RANDOM_ORB(): Sound {
        return new InternalSound(SoundIds::RANDOM_ORB);
    }

    public static function RANDOM_POP(): Sound {
        return new InternalSound(SoundIds::RANDOM_POP);
    }

    public static function RANDOM_POP2(): Sound {
        return new InternalSound(SoundIds::RANDOM_POP2);
    }

    public static function RANDOM_SPLASH(): Sound {
        return new InternalSound(SoundIds::RANDOM_SPLASH);
    }

    public static function RANDOM_TOAST(): Sound {
        return new InternalSound(SoundIds::RANDOM_TOAST);
    }

    public static function RANDOM_USE_TOTEM(): Sound {
        return new InternalSound(SoundIds::RANDOM_USE_TOTEM);
    }

    public static function SOUND_DEFINITIONS(): Sound {
        return new InternalSound(SoundIds::SOUND_DEFINITIONS);
    }

    public static function TILE_PISTON_IN(): Sound {
        return new InternalSound(SoundIds::TILE_PISTON_IN);
    }

    public static function TILE_PISTON_OUT(): Sound {
        return new InternalSound(SoundIds::TILE_PISTON_OUT);
    }
}
