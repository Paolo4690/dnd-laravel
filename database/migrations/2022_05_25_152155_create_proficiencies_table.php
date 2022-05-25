<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proficiencies', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('ability_score_id')->unique();
            $table->string('index')->unique();
            // $table->string('reference_index')->unique();
            $table->string('name');
            $table->string('type');
            $table->string('reference')->unique();

            // $table->foreign('reference_index')
            // ->references('index')
            // ->on('ability_scores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proficiencies');
    }
}
