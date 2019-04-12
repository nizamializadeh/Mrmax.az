<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $fillable = [
        'img','home_id'
    ];
    public function home(){
        return $this->belongsTo('App\Home');
    }
}
