<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterProficiencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_proficiency', function (Blueprint $table) {
            $table->unsignedBigInteger('monster_id');
            $table->foreign('monster_id')->references('id')->on('monsters');

            $table->unsignedBigInteger('proficiency_id');
            $table->foreign('proficiency_id')->references('id')->on('proficiencies');

            $table->unsignedInteger('value');

            $table->primary(['monster_id', 'proficiency_id']);

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monster_proficiency');
    }
}
