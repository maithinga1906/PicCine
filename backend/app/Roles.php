<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $timestamps = false;
    
    
    protected $fillable=[
        'roles','descr'
    ];

    protected $primarykey ='id';
    protected $table ='roles';


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
