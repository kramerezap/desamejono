<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_suratkeluar extends Model
{
     
     protected $table ='tb_suratkeluar';
    protected $fillable = [
        'ID_SURAT2','NO_SURAT','TGL_BUAT', 'TGL_KIRIM', 'DARI','KE'
 ];
  public $timestamps = false;
}
