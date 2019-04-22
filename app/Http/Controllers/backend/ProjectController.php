<?php

namespace App\Http\Controllers\backend;

use App\Project;
use App\SliderImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $settings = $this->getSettingsForTable();
        return view('backend.project.index',compact('projects','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.project.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider =new Project();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $slider->image = $name;
        }
        $slider->header = $request->header;
        $slider->description = $request->description;
        $slider->country = $request->country;
        $slider->save();
        $files = $request->file('img');
        if ($request->hasFile('img')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new SliderImage();
                $image->project_id = $slider->id;
                $image->img = $namex;
                $image->save();
            }
        }
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
    public function edit(Project  $project)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit Project';
        return view('backend.project.edit',compact('project','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Project $project)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $project->image = $name;
        }
        $project->header = $request->header;
        $project->description = $request->description;
        $project->country = $request->country;
        $project->update();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $sliderimg =SliderImage::where('id',$project->id);
        $sliderimg->delete();
        $project->delete();
        return back();
    }

    public function sliderimg(SliderImage $image)
    {
        $image->delete();
        return back();
    }
    public function sliderupload(Request $request)
    {
        $files = $request->file('img');
        if ($request->hasFile('img')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new SliderImage();
                $image->project_id = $request->project_id;
                $image->img = $namex;
                $image->save();
            }
        }
        return back();

    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Project',
            'flashSessionKey' => 'project',
            'flashSessionValue' => 'Project created',
            'backButton' => [
                'text' => "Back",
                'url' => route('project.index')
            ]
        ];
    }
    private function getSettingsForTable()
    {
        return  [
            'title' => 'Projects',
            'table' => 'Projects',
            'createButton' => [
                'text' => "Create Project ",
                'url' => route('project.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ],
                [
                    'label' => 'Header',
                ],
                [
                    'label' => 'Description',
                ],
                [
                    'label' => 'Country',
                ],
            ],
        ];
    }
}
