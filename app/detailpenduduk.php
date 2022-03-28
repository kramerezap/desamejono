<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailpenduduk extends Model
{
     
     protected $table ='detailpenduduk';
    protected $fillable = [
        'NO_KTP','NAMA_LENGKAP', 'TEMPAT_LHR', 'TGL_LHR','NO_KK','STATUS','NO_TELP','STATUSDLMKEL', 'AGAMA', 'PENDIDIKAN', 'PEKERJAAN,VIEW    ];
 
}
