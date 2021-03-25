<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    protected $table ='booking';
    protected $primarykey ='id';


    protected $fillable=[
        'id_user','id_photographer','id_combo','is_cancel','code_voucher'
    ];



    public function user()
    {
        return $this-> beLongTo('App\User','id_user');
    }

    public function combo()
    {
        return $this->hasOne('App\Combo','id_combo');
    }

    public function voucher() {
        return $this->hasOne('App\Voucher','id_voucher');
    }


}






