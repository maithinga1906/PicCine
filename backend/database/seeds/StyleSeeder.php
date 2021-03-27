<?php
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('styles')->insert([
            [ 
            'image'=>'/image/cophong.jpg',
            'name'=>'CHỤP ẢNH CỔ TRANG',
            'price'=>$faker->numberBetween(100,1000).'.000 đ'
            ],
            [
            'image'=>'/image/ngoaicanh.jpg',
            'name'=>'CHỤP ẢNH NGOAị CẢNH',
            'price'=>$faker->numberBetween(100,1000).'.000 đ'
            ],
            [ 
            'image'=>'/image/memori.jpg',
            'name'=>'CHỤP ẢNH CƯỚI',
            'price'=>$faker->numberBetween(100,1000).'.000 đ'
            ]
        ]);
    }
}
