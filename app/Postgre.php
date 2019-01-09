<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postgre extends Model
{
    protected $connection='pgsql';
    protected $table='users';
    protected $fillable=['name','email'];
}
