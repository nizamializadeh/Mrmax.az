<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function images(){
        return $this->hasMany('App\SliderImage', 'project_id');
    }
    public function posts()
    {
        return $this->belongsToMany(Slider::class);
    }
}
