<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = ['judul','harga','content'];
    public function peserta()
    {
    	return $this->hasMany('App\Peserta');
    }
}
