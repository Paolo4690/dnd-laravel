<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BetterMonsters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monsters', function (Blueprint $table) {
            $table->unsignedInteger("armor_class")->change();
            $table->unsignedInteger("hit_points")->change();
            $table->unsignedInteger("strength")->change();
            $table->unsignedInteger("dexterity")->change();
            $table->unsignedInteger("constitution")->change();
            $table->unsignedInteger("intelligence")->change();
            $table->unsignedInteger("wisdom")->change();
            $table->unsignedInteger("charisma")->change();
            $table->unsignedInteger("xp")->change();
            $table->unsignedInteger("challenge_rating")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monsters', function (Blueprint $table) {
            $table->integer("armor_class")->change();
            $table->integer("hit_points")->change();
            $table->integer("strength")->change();
            $table->integer("dexterity")->change();
            $table->integer("constitution")->change();
            $table->integer("intelligence")->change();
            $table->integer("wisdom")->change();
            $table->integer("charisma")->change();
            $table->integer("xp")->change();
            $table->integer("challenge_rating")->change();
        });
    }
}
