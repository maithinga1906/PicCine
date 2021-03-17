<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Photographer;
use App\Style;
class Post extends Model
{
    public $table="posts";

    protected $fillable = [
     'title', 'content', 'image','user_id','style_id', 'created_at','updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
    public function style() {
        return $this->belongsTo(Style::class,'style_id');
    }

}
