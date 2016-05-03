<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// run this command "composer dump-autoload" before run php artisan migrate:refresh --seed because it will clear the caches
        $this->call(UsersSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(GalleriesSeeder::class);
        $this->call(ServicesSeeder::class); 
        $this->call(ImagesSeeder::class);

         // $this->call(CategoriesServicesSeeder::class);
         /*$this->call(ServicesImagesSeeder::class);*/
         /*$this->call(GalleriesSeeder::class);*/
         /*$this->call(CategoriesSeeder::class);*/
        

    }

	protected function seedFromCSV($filename)
	{

        // Use in your seeder files
        // The first row MUST be field names
        // $seedData = $this->seedFromCSV(<some.csv>); // Filename and location of data in csv file

		if(!file_exists($filename) || !is_readable($filename))
		{
			return FALSE;
		}

		$header = NULL;
		$data = array();


		if(($handle = fopen($filename, 'r')) !== FALSE)
		{
			while(($row = fgetcsv($handle)) !== FALSE)
			{
				if(!$header) {
					$header = $row;
				} else {
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);
		}

		return $data;
	}

}
