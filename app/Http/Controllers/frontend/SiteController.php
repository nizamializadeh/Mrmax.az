<?php

namespace App\Http\Controllers\frontend;

use App\Home;
use App\Partner;
use App\Slider;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $sliders =Slider::orderBy('id', 'DESC')->where('status', '=', 1)->get();
        $menzils =Home::orderBy('id', 'DESC')->where('type', '=', 1)->paginate(5);
        $obyekts =Home::orderBy('id', 'DESC')->where('type', '=', 0)->paginate(1);
        $video =Video::all()->first();
        $partners =Partner::all();
        return view('frontend.index',compact('menzils','obyekts','video','partners','sliders'));
    }
    public function project()
    {
        $projeects=Slider::all();
        return view('frontend.project',compact('projeects'));
    }

    public function projectsingle($id)
    {
        $project =Slider::findorfail($id);
        return view('frontend.projectsingle',compact('project'));
    }
    public function homesingle($id)
    {
        $home =Home::findorfail($id);
        return view('frontend.homesingle',compact('home'));
    }
}
