<?php

namespace App\Http\Controllers\backend;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::all();
        $settings = $this->getSettingsForTable();
        return view('backend.social.index',compact('socials','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.social.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Social $social)
    {
        $social->create($request->all());
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
    public function edit(Social $social)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit category';
        return view('backend.social.edit',compact('social','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $social->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        $social->delete();
        return back();
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Social',
            'flashSessionKey' => 'Social',
            'flashSessionValue' => 'Social created',
            'backButton' => [
                'text' => "Back",
                'url' => route('social.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Social',
            'table' => 'Social',
            'createButton' => [
                'text' => "Create Social ",
                'url' => route('social.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'icon',
                ],
                [
                    'label' => 'link',
                ]


            ],
        ];
    }

}
