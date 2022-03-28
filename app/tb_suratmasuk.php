<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_suratmasuk extends Model
{
     
     protected $table ='tb_suratmasuk';
    protected $fillable = [
        'ID_SURAT','NO_SURAT','TGL_BUAT', 'TGL_KIRIM', 'DARI','KE'
 ];
  public $timestamps = false;
}
