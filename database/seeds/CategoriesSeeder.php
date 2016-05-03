<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends DatabaseSeeder
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

        foreach ($seedDataFromCategories as $row)
        {
            DB::table('categories')->insert($row);
        }
    }
}
