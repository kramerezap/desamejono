<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_penduduk extends Model
{
	 
	 protected $table ='tb_penduduk';
    protected $fillable = [
        'NO_KTP','NO_KK', 'ID_PENDIDIKAN', 'ID_STATUSDLMKEL','ID_PEKERJAAN','ID_AGAMA','ID_STATUS','NAMA_LENGKAP','TEMPAT_LHR','TGL_LHR','NOTELP','VIEW'
    ];
}
