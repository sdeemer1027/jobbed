<?php

namespace App\Console\Commands;

use App\Models\User;
use Faker\Factory;
use Illuminate\Console\Command;

use App\Models\Zipcode;
//use App\User;

use Illuminate\Support\Arr;




class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $faker = Factory::create();


        /*
            $zips = Zipcode::all()->where('stateabv','FL')->where('city','Miami')->random(1);
            foreach($zips as $zip){
                $gender = 'female';
                $firstName = $faker->firstName('female');
                $users =
                ([
                    'name' => $faker->username(),
                    'first_name' => $firstName,
                    'last_name' => $faker->lastName,
                    'gender' => $gender,
                //    'age' => random_int('21', '65'),
                    'address' => $faker->address,
                    'address2' => '',
                    'city' => $zip['city'],
                    'state' => $zip['stateabv'],
                    'zip' => $zip['zip'],
                    'phone' => $faker->phoneNumber,
                    'facebook' => '',
                    'facebook2' => '',
                    'instagram' => '',
                    'linkedin' => '',
                    'youtube' => '',
                //    'profifilepic' => '/img/'.$fpic.'.jpg',
                    'lat' => $zip->lat,
                    'lng' => $zip->lng,
                    'email' => $zip->zip.$faker->email,
                    'password' => '$2y$10$7EMc/1kS3h/LOzH9IkXakOzHi9EG1PCDhmO3ckYlZcIh8R2jnQ0WK',
                ]);

echo " [".$firstName."-".$zip['zip']." ".$zip->zip.$faker->email." ".$faker->address."] ";
//$users->update();

        }
*/


        return 0;
    }
}
