<?php

namespace Database\Seeders;

use App\Models\Userpics;
use App\Models\User;
use App\Models\Zipcode;
use App\Models\Recipes;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //     \App\Models\User::factory(10)->create();

/*
        Zipcode::truncate();
        $csvFile = fopen(base_path("database/data/zips.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Zipcode::create([
                    "id" => $data['0'],
                    "zip" => $data['1'],
                    "type" => $data['2'],
                    "city" => $data['3'],
                    "typeb" => $data['4'],
                    "statename" => $data['5'],
                    "stateabv" => $data['6'],
                    "code" => $data['7'],
                    "lat" => $data['8'],
                    "lng" => $data['9'],
                    "country" => $data['10'],
                    "status" => $data['11'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);

*/



/*
$zips = Zipcode::select()->where('stateabv','FL')->where('city','Hollywood')->get();
foreach($zips as $zip) {
echo $zip->zip;
}

die;
*/




 User::truncate();

        $users = [
        [
            'id'             => 1,
        //    'user_info' => ,
            'profile_name' => '',
            'name'           => 'Dr.Steve',
            'first_name'     => 'Steven',
            'last_name'      => 'Deemer',
            'address' => '1833 Madison St',
            'address2' => 'Unit 1',
            'city' => 'Hollywood',
            'state' => 'FL',
            'zip' => '33020',
            'phone' => '954-391-0398',
            'facebook' =>  'https://www.facebook.com/Stevendeemer2017',
            'facebook2' => 'https://www.facebook.com/drsteve2020',
            'instagram' => 'https://www.instagram.com/sd1964.with/',
            'linkedin' => 'https://www.linkedin.com/in/steven-deemer-6bb54b150/',
            'youtube' => 'https://www.youtube.com/channel/UCTx60bsEpHaIRAxMp9Fjy5g',
            'profilepic' => '/me/me.jpg',
            'gender' =>'male',
            'age' => '55',
            'lat' => '',
            'lng' => '',
            'description' => '',
            'looking' => '',
            'email'          => 'Dr.Steve@steven.news',
            'password'       => '$2y$10$7EMc/1kS3h/LOzH9IkXakOzHi9EG1PCDhmO3ckYlZcIh8R2jnQ0WK',
            'remember_token' => null,
        ],
        ];

        User::insert($users);





// $faker = new Faker(new Locale("en-US"));

$zips = Zipcode::select()->where('stateabv','FL')->where('city','Hollywood')->get();
      
foreach($zips as $zip) {
$lat=$zip->lat;
$lng=$zip->lng;
$zippy=$zip->zip;

}





        $csvFile = fopen(base_path("database/data/users.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
            "id"      => $data['0'],
//                    "user_id" => $data['1'],
//                    "pic"     => $data['2'],

            'profile_name'   => $data['3'],
            'name'           => $data['4'],
            'first_name'     => $data['5'],
            'last_name'      => $data['6'],
            'address'        => $data['7'],
            'address2'       => $data['8'],
            'city'           => 'Hollywood', //$data['9'],
            'state'          => 'FL',        //$data['10'],
            'zip'            => $data['11'],
            'phone'          => $data['12'],
            'lat'            => $data['13'],
            'lng'            => $data['14'],
            'gender'         => 'Female',    //$data['15'],
            'age'            => random_int('24', '55'), //$data['16'],
            'profilepic'     => $data['17'],
            'description'    => $data['18'],
            'looking'        => $data['19'],
            'facebook'       => $data['20'],
            'facebook2'      => $data['21'],
            'instagram'      => $data['22'],
            'linkedin'       => $data['23'],
            'youtube'        => $data['24'],
            'email'          => $data['25'],

            'password'       => '$2y$10$7EMc/1kS3h/LOzH9IkXakOzHi9EG1PCDhmO3ckYlZcIh8R2jnQ0WK',
            'remember_token' => null,
















                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);









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



        Recipes::truncate();
        $csvFile = fopen(base_path("database/data/recipe.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Recipes::create([
                    "recipe_id" => $data['0'],
                    "title" => $data['1'],
                    "subtitle" => $data['2'],
                    "cooked_on" => $data['3'],
                    "img_src" => $data['4'],
                    "url" => $data['5'],

                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);





    }
}
