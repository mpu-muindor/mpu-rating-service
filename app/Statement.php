<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model {

    protected $primaryKey = 'number';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
