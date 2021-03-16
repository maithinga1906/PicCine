<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Photographer;
use Carbon\Carbon;
class Book extends Model
{

    public $table="books";

    protected $fillable = [
     'user_id', 'photographer_id', 'is_cancel', 'start_date','hours'
    ];

  

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function product() {
        return $this->belongsTo(Photographer::class,'photographer_id');
    }

}
