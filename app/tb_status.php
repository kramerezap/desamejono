<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_status extends Model
{
	 
	 protected $table ='tb_status';
    protected $fillable = [
        'ID_STATUS','STATUS'
    ];
}
