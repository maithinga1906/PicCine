<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   
    public $timestamps = false;
    
    
    protected $fillable=[
        'id_photographer'
    ];

    protected $primarykey ='id';
    protected $table ='post';
    
    public function photographer()
    {
        return $this->hasMany('App\User','id','id_photographer');
    }

    public function detail()
    {
        return $this->belongsTo('App\PostDetail','id_post','id');
    }

    
}
