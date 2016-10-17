<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$doctors = array();
		$numOfDoctors = 100;
		$specialties = [
			"Anesthesiologist",
			"Cardiologist",
			"Endocrinologist",
			"Family medicine",
			"Gastroenterologist",
			"Hematologist",
			"Hepatologist",
			"Hospitalist",
			"Intensivist"
		];
		$faker = Faker::create();

		for($i = 0; $i < $numOfDoctors; $i++) {
			array_push($doctors, array(
				"username" => $faker->userName,
				"password" => "12345678",
				"last_name" => $faker->firstName,
				"first_name" => $faker->lastName,
				"middle_name" => $faker->lastName,
				"specialty" => $specialties[rand(0, count($specialties) - 1)],
				"license_no" => $faker->uuid
			));
		}

    	App\Doctor::truncate();

    	foreach($doctors as $doctor) {
    		App\Doctor::create($doctor);
    	}
    }
}
