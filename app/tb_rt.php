<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_rt extends Model
{
     
     protected $table ='tb_rt';
    protected $fillable = [
        'ID_RT','ID_RW','NO_RT'
    ];
    public $timestamps = false;
}

