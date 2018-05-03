<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['judul','content'];
    public function peserta()
    {
    	return $this->hasMany('App\Peserta');
    }
}
