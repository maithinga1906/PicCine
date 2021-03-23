<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
   
    public $timestamps = false;
    
    
    protected $fillable=[
        'username','email','password','id_roles','phone','name','token'
    ];

    protected $primarykey ='id';
    protected $table ='user';
    public function roles()
    {
        return $this->hasMany('App\Roles','id_roles','id');
    }
    public function photographer_booking()
    {
        return $this->belongsTo('App\Booking','id_photographer','id');
    }
    public function user_booking()
    {
        return $this->belongsTo('App\Booking','id_user','id');
    }
}
