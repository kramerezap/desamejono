<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_galeri extends Model
{
     
     protected $table ='tb_galeri';
    protected $fillable = [
        'ID_GALERI','ID_USER', 'JUDUL_GALERI', 'URL_GALERI','CREATED_AT','UPDATED_AT','VIEW'
    ];
    function getGambar(){
        if (!$this->URL_GALERI) {
            return asset('Assets/images/galeri/'.$this->URL_GALERI);
        }
    }
}
