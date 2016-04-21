<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedDataFromClients = $this->seedFromCSV(app_path().'/../database/csv/clients.csv');

        foreach ($seedDataFromClients as $row)
        {
            DB::table('clients')->insert($row);
        }
    }
}
