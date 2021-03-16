<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       DB::table('photographers')->insert([
        ['fullname'=>$faker->name(),
        'type'=>'tư nhân',
        'is_online'=>true,
        'user_id'=>2]
       ]);
    }
}
