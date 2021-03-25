<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //
    protected $table='voucher';

    protected $primarykey='id';

    protected $fillable=['name','code','descr','count','denomination'];

    public function booking() {
        return $this->belongstoMany('App\Booking');
    }
    
}
