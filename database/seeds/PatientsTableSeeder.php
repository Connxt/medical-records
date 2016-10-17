<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$patients = array();
		$numOfPatients = 100;
		$genders = array("Male", "Female");
		$faker = Faker::create();

		for($i = 0; $i < $numOfPatients; $i++) {
			array_push($patients, array(
				"username" => $faker->userName,
				"password" => "12345678",
				"last_name" => $faker->firstName,
				"first_name" => $faker->lastName,
				"middle_name" => $faker->lastName,
				"date_of_birth" => $faker->dateTime,
				"gender" => $genders[rand(0, count($genders) - 1)]
			));
		}

    	App\Patient::truncate();

    	foreach($patients as $patient) {
    		App\Patient::create($patient);
    	}
    }
}
