<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert([
            ['username'=>'admin',
            'password'=>bcrypt('adminstrator'),
            'numberPhone' => $faker->phoneNumber,
            'email' => $faker->unique()->email,
            'birthdate'=>$faker->dateTimeBetween('1990-01-01', '2010-12-31')->format('Y-m-d'),
            'address'=>'101B, Le Huu Trac, Phuoc My, Son Tra, Da Nang',
            'gender'=>'nu',
            'role'=>'admin',
            'is_online'=>true,
            ],
            ['username'=>'photographer',
            'password'=>bcrypt('photographer'),
            'numberPhone' => $faker->phoneNumber,
            'email' => $faker->unique()->email,
            'birthdate'=>$faker->dateTimeBetween('1990-01-01', '2010-12-31')->format('Y-m-d'),
            'address'=>'101B, Le Huu Trac, Phuoc My, Son Tra, Da Nang',
            'gender'=>'nu',
            'role'=>'photographer',
            'is_online'=>true,
        ],
        ['username'=>'user',
            'password'=>bcrypt('user'),
            'numberPhone' => $faker->phoneNumber,
            'email' => $faker->unique()->email,
            'birthdate'=>$faker->dateTimeBetween('1990-01-01', '2010-12-31')->format('Y-m-d'),
            'address'=>'101B, Le Huu Trac, Phuoc My, Son Tra, Da Nang',
            'gender'=>'nu',
            'role'=>'user',
            'is_online'=>true,
            ]
        ]);
    }
}
