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
            $table->string("index")->unique();
            $table->string("name");
            $table->string("type");
            $table->string("alignment");
            $table->string("size");
            $table->string("hit_dice");
            $table->string("languages");
            $table->unsignedInteger("armor_class");
            $table->unsignedInteger("hit_points");
            $table->unsignedInteger("strength");
            $table->unsignedInteger("dexterity");
            $table->unsignedInteger("constitution");
            $table->unsignedInteger("intelligence");
            $table->unsignedInteger("wisdom");
            $table->unsignedInteger("charisma");
            $table->unsignedInteger("xp");
            $table->unsignedInteger("challenge_rating");
            $table->timestamps();

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
