<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCall extends Model
{
    protected $connection='pgsql';
    protected $table = 'kontak';
}
