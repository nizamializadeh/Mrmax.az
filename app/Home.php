<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'image','header', 'description','bedrooms','floor','area','country','price','city','address','date','type'
    ];
    public function images(){
        return $this->hasMany('App\HomeImage', 'home_id');
    }

}
