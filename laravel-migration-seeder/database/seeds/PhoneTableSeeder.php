<?php

use Illuminate\Database\Seeder;
use App\Phone;

use Faker\Generator as Faker;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
        $phone = new Phone();
       // $phone->brand = 'Apple';
       // $phone->model = 'iPhone';
       // $phone->price = '1000';
       // $phone->color = 'Silver';
       // $phone->capacity = '256 Gb';
       // $phone->save();


        $phone->brand = $faker->name();
        $phone->model = $faker->name();
        $phone->price = rand(200, 2000);
        $phone->color = 'Silver';
        $phone->capacity = rand(80, 256);
        $phone->save();
        
        }
    }
}
