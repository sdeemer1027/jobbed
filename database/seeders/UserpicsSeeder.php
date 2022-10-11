<?php

namespace Database\Seeders;

use App\Models\Userpics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserpicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userpics::truncate();
        $csvFile = fopen(base_path("database/data/userpics.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Userpics::create([
                    "id" => $data['0'],
                    "user_id" => $data['1'],
                    "pic" => $data['2'],

                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);


    }
}
