<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['peserta_id','foto'];
    public function getFotoAttribute($foto)
    {
    	return asset($foto);
    }
    public function status()
    {
        return $this->hasMany('App\Status');
    }
    public function peserta()
    {
        return $this->belongsTo('App\Peserta');
    }
}
