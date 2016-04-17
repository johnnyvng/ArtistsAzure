<?php

use Illuminate\Database\Seeder;

class GalleriesSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$seedDataToGalleries = $this->seedFromCSV(app_path().'/../database/csv/galleries.csv');
       
        foreach ($seedDataToGalleries as $row) 
        {
            // Can manipulate the data here...
            DB::table('galleries')->insert($row);
        }

    }





}
