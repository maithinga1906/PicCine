<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;
   
    public $timestamps = false;
    
    
    protected $fillable=[
        'name_style','descr','img','price'
    ];

    protected $primarykey ='id';
    protected $table ='combo';


    public function user()
    {
        return $this->hasMany('App\Combo','id_user','id');
    }
  
}
