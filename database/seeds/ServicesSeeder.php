<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Filename and location of data in csv file
		$seedDataFromServices = $this->seedFromCSV(app_path().'/../database/csv/services.csv');

		foreach ($seedDataFromServices as $row) {
			// Can manipulate the data here...
			DB::table('services')->insert($row);
		 }
    }
}
