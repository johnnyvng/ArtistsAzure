<?php

use Illuminate\Database\Seeder;

class ServicesCategoriesSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $seedDataFromCategories = $this->seedFromCSV(app_path().'/../database/csv/categories.csv');

        $seedData = $this->seedFromCSV(app_path().'/../database/csv/services.csv');

        foreach ($seedDataFromCategories as $rowa)
        {
        	DB::table('categories')->insert($rowa);
        }

        foreach ($seedData as $row) 
        {
        	//
        	DB::table('services')->insert($row);
        }
    }
}