<?php

use Illuminate\Database\Seeder;
use App\AbilityScore;

class AbilityScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abilityScores = config('abilityScores');

        foreach ($abilityScores as $value) {
            AbilityScore::create($value);
        }
    }
}
