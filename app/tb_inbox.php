<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class tb_inbox extends Model
{
	 
	 protected $table ='tb_inbox';
    protected $fillable = [	
        'ID_INBOX', 'NAMA_LENGKAP', 'EMAIL','PESAN','TGL_PESAN','STATUS'
    ];
    public $timestamps = false;
}
