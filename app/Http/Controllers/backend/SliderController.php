<?php

namespace App\Http\Controllers\backend;

use App\Project;
use App\Slider;
use App\SliderImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function setStatus(Request $request)
    {
        if ($request->ajax())
        {
            DB::table($request->table)->where('id',$request->id)->update(['status' => $request->status]);
            $resultMessage = ($request->status) ? "Status changed to active" : "Status changed to deactive";
            return response($resultMessage,200);
        }
    }

    public function index()
    {
        $sliders = DB::table('sliders')
            ->join('projects', ['projects.id' => 'sliders.project_id'])
            ->select('sliders.id','sliders.image','projects.header')
            ->get();
        $settings = $this->getSettingsForTable();
        return view('backend.slider.index',compact('sliders','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        $projects =Project::all();
        return view('backend.slider.create',compact('settings','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider =new Slider();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $slider->image = $name;
        }
            $slider->project_id = $request->project_id;
            $slider->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider  $slider)
    {
        $projects =Project::all();
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit category';
        return view('backend.slider.edit',compact('slider','projects','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {

        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $slider->image = $name;
        }
        $slider->project_id = $request->project_id;
        $slider->update();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back();
    }



    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Slider',
            'flashSessionKey' => 'slider',
            'flashSessionValue' => 'Slider created',
            'backButton' => [
                'text' => "Back",
                'url' => route('slider.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Sliders',
            'table' => 'sliders',
            'createButton' => [
                'text' => "Create Slider ",
                'url' => route('slider.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ],
                [
                    'label' => 'Project',
                ]
            ],
        ];
    }

}
