<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image','project_id'
    ];
    public function project_slider(){
        return $this->belongsTo('App\Project', 'project_id');
    }

}
