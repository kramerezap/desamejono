<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_pendidikan extends Model
{
     
     protected $table ='tb_pendidikan';
    protected $fillable = [
        'ID_PENDIDIKAN', 'PENDIDIKAN'
    ];
}
