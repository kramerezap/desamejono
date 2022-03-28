<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_keluarga extends Model
{
	 
	 protected $table ='tb_keluarga';
    protected $fillable = [
        'NO_KK', 'ID_RT', 'ID_RW','ALAMAT','VIEW'
    ];
}
