<?php

use Illuminate\Database\Seeder;

class HistoryTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$historyTypes = array(
			array("name" => "Diagnosis"),
			array("name" => "Prescription"),
			array("name" => "Hospital Admission"),
		);

    	App\HistoryType::truncate();

    	foreach($historyTypes as $historyType) {
    		App\HistoryType::create($historyType);
    	}
    }
}
