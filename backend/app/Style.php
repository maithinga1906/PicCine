<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    public $table="styles";

    protected $fillable = ['image', 'name','price'];

}
