<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    //  use HasFactory;
   
    public $timestamps = false;
    
    
    protected $fillable=[
        'title','content','img','id_post'
    ];

    protected $primarykey ='id';
    protected $table ='post_detail';
    public function post()
    {
        return $this->hasMany('App\Post','id','id_post');
    }
    
}
