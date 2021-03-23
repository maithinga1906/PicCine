<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // use HasFactory;

    protected $fillable=[
        'id_user','id_photographer','id_combo','is_cancel'
    ];

    protected $primarykey ='id';
    protected $table ='booking';
    public function user()
    {
        return $this->hasMany('App\User','id_user','id');
    }
    public function photographer()
    {
        return $this->hasMany('App\User','id_photographer','id');
    }
    public function combo()
    {
        return $this->hasMany('App\Combo','id_combo','id');
    }
}






