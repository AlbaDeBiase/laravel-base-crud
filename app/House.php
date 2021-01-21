<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';
    protected $fillable =['type', 'mq','price','garden','id'];
}
