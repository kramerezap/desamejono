<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_potensi extends Model
{
	 
	 protected $table ='tb_potensi';
    protected $fillable = [
        'ID_POTENSI','ID_USER', 'JUDUL_POTENSI', 'GAMBAR', 'ISI_POTENSI','CREATED_AT','UPDATED_AT','VIEW'
    ];
    function getGambar(){
    	if (!$this->GAMBAR) {
    		return asset('Assets/images/potensidesa/'.$this->GAMBAR);
    	}
    }
}
