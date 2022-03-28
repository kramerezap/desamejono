<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class tb_laporan extends Model
{
	 
	 protected $table ='tb_laporan';
    protected $fillable = [	
        'ID_LAPORAN', 'NAMA', 'EMAIL','ISI_LAPORAN','GAMBAR','TGL_LAPORAN'
    ];
    public $timestamps = false;
}
