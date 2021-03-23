<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBooking extends Model
{
    use HasFactory;
   
    public $timestamps = false;
    
    
    protected $fillable=[
        'id_booking','address','user_phone','photographer_phone','user_name','photographer_name','code_vourcher','name_style'
    ];

    protected $primarykey ='id';
    protected $table ='detail_booking';
    public function booking()
    {
        return $this->hasMany('App\Booking','id_boooking','id');
    }
   
}
