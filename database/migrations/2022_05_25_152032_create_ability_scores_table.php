<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('ability_scores', function (Blueprint $table) {
            $table->id();
            $table->string('ability_score_reference')->unique();
            $table->string('index')->unique();
            $table->string('name');
            $table->text('desc');

            // $table->unsignedBigInteger('proficiency_id');

            $table->foreign('ability_score_reference')
            ->references('reference')
            ->on('ability_scores');
            // $table->foreign('ability_score_reference')
            // ->references('proficiencies')
            // ->on('proficiencies');

        });

        Schema::disableForeignKeyConstraints();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ability_scores');
    }
}
