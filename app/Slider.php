<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image','header', 'description','country'
    ];

    public function images(){
        return $this->hasMany('App\SliderImage', 'slider_id');
    }

}
