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
    
    public function user()
    {
        return $this->belongsto('App\User','id_photographer');
    }

    
}
