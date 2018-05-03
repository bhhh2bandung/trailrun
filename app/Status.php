<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fiallable = ['upload_id','status'];
    public function upload()
    {
        return $this->belongsTo('App\Upload');
    }
}
