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
        $seedDataFromGalleries = $this->seedFromCSV(app_path().'/../database/csv/galleries.csv');

        foreach ($seedDataFromGalleries as $row)
        {
            DB::table('galleries')->insert($row);
        }
    }
}
