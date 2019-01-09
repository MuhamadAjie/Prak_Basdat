<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $connection='mysql';
    protected $table='users';
    protected $fillable=['name','email'];
}