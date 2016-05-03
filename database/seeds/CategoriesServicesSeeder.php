<?php

use Illuminate\Database\Seeder;

class CategoriesServicesSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   	public function run()
	{
	    $seedDataFromCategoriesServices = $this->seedFromCSV(app_path().'/../database/csv/categoriesservicesseeder.csv');

	    foreach ($seedDataFromCategoriesServices as $row)
	    {
	        DB::table('categories_services')->insert($row);
	    }
	}
}
