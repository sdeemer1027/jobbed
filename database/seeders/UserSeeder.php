<?php

namespace Database\Seeders;

//use App\Http\Controllers\User;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

    }
}
