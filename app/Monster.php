<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    protected $fillable = [
        'index',
        'name',
        'type',
        'alignment',
        'armor_class',
        'hit_points',
        'size',
        'strength',
        'dexterity',
        'constitution',
        'intelligence',
        'wisdom',
        'charisma',
        'xp',
        'challenge_rating',
        'hit_dice',
        'languages',
    ];
}
