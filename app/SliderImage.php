<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    protected $fillable = [
        'img','slider_id'
    ];
    public function slider(){
        return $this->belongsTo('App\Silider');
    }
}
