<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    //
    protected $fillable = ['name', 'date', 'gender', 'email', 'phone'];
}
