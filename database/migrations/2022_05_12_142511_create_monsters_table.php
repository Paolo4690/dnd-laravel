<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("index");
            $table->string("name");
            $table->string("type");
            $table->string("alignment");
            $table->string("size");
            $table->string("hit_dice");
            $table->string("languages");
            $table->integer("armor_class");
            $table->integer("hit_points");
            $table->integer("strength");
            $table->integer("dexterity");
            $table->integer("constitution");
            $table->integer("intelligence");
            $table->integer("wisdom");
            $table->integer("charisma");
            $table->integer("xp");
            $table->integer("challenge_rating");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monsters');
    }
}
