<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Type::create([
            'title_en' => 'apartment',
            'title_fa' => 'آپارتمان',
        ]);
        \App\Type::create([
            'title_en' => 'villa',
            'title_fa' => 'ویلا',
        ]);
        \App\Type::create([
            'title_en' => 'house',
            'title_fa' => 'خانه مستقل',
        ]);
        \App\Type::create([
            'title_en' => 'wooden cottage',
            'title_fa' => 'کلبه چوبی',
        ]);
    }
}
