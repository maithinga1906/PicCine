<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->insert([
           [
        'title'=>"Chụp ảnh ngoại cảnh",
        "content"=>"Tagore từng nói rằng, nếu như bạn yêu một người, hãy để tình yêu của bạn như ánh mặt trời bao phủ lấy người ấy và để người ấy tự do...", 
        'image'=>'/image/ngoaicanh.jpg',
        "photographer_id"=>1   ,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
           [
               'title'=>'Chụp ảnh cổ phong',
               "content"=>'“Đã sớm biết người không quay về nhưng ta đã nói đợi thì nhất định sẽ đợi. “',
               'image'=>'/image/cophong1.jpg',
               "photographer_id"=>1,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ],
           [
            'title'=>'Chụp ảnh Free style',
               "content"=>'“– Cậu có thường ở một mình như thế không?
               – Luôn là thế.
               – Cậu thích cô đơn à?
               – Không, chẳng ai thích cô đơn cả. Tớ chỉ là không cố kết bạn, vậy thôi.”
               
               [ Rừng Nauy ]',
               'image'=>'/image/free.jpg',
               "photographer_id"=>1,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]]);
    }
}
