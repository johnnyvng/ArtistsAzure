<?php

use Illuminate\Database\Seeder;

class Galleries_Images_Seeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedDataFromGalleries = $this->seedFromCSV(app_path().'/../database/csv/galleries.csv');

        $seedData = $this->seedFromCSV(app_path().'/../database/csv/images.csv');

        foreach ($seedDataFromGalleries as $rowa)
        {
        	DB::table('galleries')->insert($rowa);
        }

        foreach ($seedData as $row) 
        {
        	//
        	DB::table('images')->insert($row);
        
    }
    }
}
