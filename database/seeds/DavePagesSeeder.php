<?php

use Illuminate\Database\Seeder;

class DavePagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Filename and location of data in csv file
        $seedData = $this->seedFromCSV(app_path().'/../database/seeds/pages.csv');

        foreach ($seedData as $data){
        	// manipulate data here
        	DB::table('davepages')->insert($data);
        }
    }

    protected function seedFromCSV($filename)
	{
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
