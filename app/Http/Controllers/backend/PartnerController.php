<?php

namespace App\Http\Controllers\backend;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        $settings = $this->getSettingsForTable();
        return view('backend.partner.index',compact('partners','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.partner.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Partner $partner)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $partner->img = $name;
            $partner->save();
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
    public function edit(Partner $partner)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit category';
        return view('backend.partner.edit',compact('partner','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $partner->img = $name;
            $partner->update();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return back();
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Partner',
            'flashSessionKey' => 'partner',
            'flashSessionValue' => 'Partner created',
            'backButton' => [
                'text' => "Back",
                'url' => route('partner.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Partner',
            'table' => 'Partner',
            'createButton' => [
                'text' => "Create Partner ",
                'url' => route('partner.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ]


            ],
        ];
    }
}
