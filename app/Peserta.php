<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = ['user_id','ktp','tgl','kelamin_id','darah','komunitas','tiket_id','kategori_id','kaos','telepon','telepon1','alamat','kota','pos','umur'];
    
    public function upload()
    {
        return $this->hasMany('App\Upload');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tiket()
    {
        return $this->belongsTo('App\Tiket');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
    public function kelamin()
    {
    	return $this->belongsTo('App\Kelamin');
    }
}
