<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Country::create([
            'country_en' => 'IR',
            'city_en' => 'tehran',
            'country_fa' => 'IR',
            'city_fa' => 'تهران',
        ]);
        \App\Country::create([
            'country_en' => 'IR',
            'city_en' => 'mazandaran',
            'country_fa' => 'IR',
            'city_fa' => 'مازندران',
        ]);
        \App\Country::create([
            'country_en' => 'IR',
            'city_en' => 'kish',
            'country_fa' => 'IR',
            'city_fa' => 'کیش',
        ]);
        \App\Country::create([
            'country_en' => 'IR',
            'city_en' => 'mashhad',
            'country_fa' => 'IR',
            'city_fa' => 'مشهد',
        ]);
    }
}
