<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Comment;
use App\User;
class Photographer extends Model
{
    use HasFactory;

    public $table="photographers";
    // public $timestamps = false;

    protected $fillable = [
        'fullname', 'type', 'is_online', 'user_id'
    ];

    public function user() {
        return $this->hasMany(User::class,'user_id');
    }
}
