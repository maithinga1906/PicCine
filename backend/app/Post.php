<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Photographer;

class Post extends Model
{


    public $table="posts";

    protected $fillable = [
     'title', 'content', 'image','photographer_id', 'created_at','updated_at'
    ];

    public function product() {
        return $this->hasMany(Photographer::class,'photographer_id');
    }

}
