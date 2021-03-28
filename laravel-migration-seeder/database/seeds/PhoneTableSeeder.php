<?php

use Illuminate\Database\Seeder;
use App\Phone;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phone = new Phone();
        $phone->brand = 'Apple';
        $phone->model = 'iPhone';
        $phone->price = '1000';
        $phone->color = 'Silver';
        $phone->capacity = '256 Gb';
        $phone->save();
    }
}
