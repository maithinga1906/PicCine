<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    $table->string('username');
    $table->string('password');
    $table->timestamp('password_verified_at')->nullable();
    $table->string('numberPhone');
    $table->string('email')->unique();
    $table->date('birthdate');
    $table->string('address');
    $table->string('gender');
    $table->string('role');
    public function run()
    {
        DB::table('categories')->insert([
            ['username'=>'',
            'password'=>'',
            'password_verified_at'=>'',
            'numberPhone'=>'',
            'email'=>'',
            'birthdate'=>'',
            'address'=>'',
            'gender'=>'',
            'role'=>''
            ],
            ['username'=>'',
            'password'=>'',
            'password_verified_at'=>'',
            'numberPhone'=>'',
            'email'=>'',
            'birthdate'=>'',
            'address'=>'',
            'gender'=>'',
            'role'=>''
            ]
        ]);
    }
}
