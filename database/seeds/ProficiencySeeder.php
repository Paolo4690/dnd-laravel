<?php

use Illuminate\Database\Seeder;
use App\Proficiency;

class ProficiencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proficiency = config('proficiencies');

        foreach ($proficiency as $value) {
            Proficiency::create($value);
        }
    }
}
