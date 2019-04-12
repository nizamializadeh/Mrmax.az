<?php

namespace App\Http\Controllers\backend;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        $settings = $this->getSettingsForTable();
        return view('backend.video.index',compact('videos','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.video.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Video $video)
    {

        $video =new Video();
        $file = $request->file('link');
        if ($request->hasFile('link')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('video'), $name);
            $video->link = $name;
        }
        $video->save();
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
    public function edit(Video $video)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit category';
        return view('backend.video.edit',compact('video','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Video $video)
    {
        $video->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return back();
    }


    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Video',
            'flashSessionKey' => 'video',
            'flashSessionValue' => 'Video created',
            'backButton' => [
                'text' => "Back",
                'url' => route('video.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Video',
            'table' => 'Video',
            'createButton' => [
                'text' => "Create Video ",
                'url' => route('video.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'link',
                ]


            ],
        ];
    }

}
