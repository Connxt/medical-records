<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$histories = array();
		$numOfHistories = 500;
		$faker = Faker::create();

		for($i = 0; $i < $numOfHistories; $i++) {
			array_push($histories, array(
				"patient_id" => rand(1, 100),
				"doctor_id" => rand(1, 100),
				"history_type_id" => rand(1, 3),
				"description" => $faker->text(200)
			));
		}

    	App\History::truncate();

    	foreach($histories as $history) {
    		App\History::create($history);
    	}
    }
}
