<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_rw extends Model
{
     
     protected $table ='tb_rw';
    protected $fillable = [
        'ID_RW','NO_RW'
    ];
    public $timestamps = false;
}

