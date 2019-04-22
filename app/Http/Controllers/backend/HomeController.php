<?php

namespace App\Http\Controllers\backend;

use App\Home;
use App\HomeImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();
        $settings = $this->getSettingsForTable();
        return view('backend.home.index',compact('homes','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.home.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $home =new Home();
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $home->image = $name;
        }
        $home->header = $request->header;
            $home->description = $request->description;
            $home->country = $request->country;
            $home->bedrooms = $request->bedrooms;
            $home->floor = $request->floor;
            $home->area = $request->area;
            $home->price = $request->price;
            $home->city = $request->city;
            $home->address = $request->address;
            $home->date = $request->date;
            $home->type = $request->type;
            $home->save();
            $files = $request->file('img');
            if ($request->hasFile('img')){
                foreach ($files as $doc) {
                    $namex = rand(). "." . $doc->getClientOriginalExtension();
                    $doc->move(public_path('photo'), $namex);
                    $image = new HomeImage();
                    $image->home_id =$home->id;
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
    public function edit(Home $home)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit Home';
        return view('backend.home.edit',compact('home','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $home->image = $name;
        }

        $home->header = $request->header;
            $home->description = $request->description;
            $home->country = $request->country;
            $home->bedrooms = $request->bedrooms;
            $home->floor = $request->floor;
            $home->area = $request->area;
            $home->price = $request->price;
            $home->city = $request->city;
            $home->address = $request->address;
            $home->date = $request->date;
            $home->type = $request->type;
            $home->update();
        return back();

    }


    public function destroy(Home $home)
    {
        $homeimage =HomeImage::where('id',$home->id);
        $homeimage->delete();
        $home->delete();
        return back();
    }
    public function homeimg(HomeImage $image)
    {

        $image->delete();
        return back();
    }
    public function homeupload(Request $request)
    {
        $files = $request->file('img');
        if ($request->hasFile('img')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new HomeImage();
                $image->home_id = $request->home_id;
                $image->img = $namex;
                $image->save();
            }
        }
        return back();

    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Home',
            'flashSessionKey' => 'home',
            'flashSessionValue' => 'announcement created',
            'backButton' => [
                'text' => "Back",
                'url' => route('home.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Homes',
            'table' => 'homes',
            'createButton' => [
                'text' => "Create announcement ",
                'url' => route('home.create')
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
                [
                    'label' => 'Bedrooms',
                ],
                [
                    'label' => 'Floor',
                ],
                [
                    'label' => 'Area',
                ],
                [
                    'label' => 'Price',
                ],
                [
                    'label' => 'City',
                ],
                [
                    'label' => 'Address',
                ],
                [
                    'label' => 'Date',
                ],
                [
                    'label' => 'Type',
                ],

            ],
        ];
    }
}
