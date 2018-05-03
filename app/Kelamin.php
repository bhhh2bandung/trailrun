<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelamin extends Model
{
    protected $fillable = ['judul','kode','keterangan'];
    public function peserta()
    {
    	return $this->hasMany('App\Peserta');
    }
}
