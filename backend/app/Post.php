<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=[
        'id_photographer','title','content','img',
    ];

    protected $primarykey ='id';
    protected $table ='post';
    
    public function photographer()
    {
        return $this->hasMany('App\User','id','id_photographer');
    }

    
}
