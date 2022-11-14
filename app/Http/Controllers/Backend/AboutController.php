<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About;
use Image;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about= About::first();
        return view('backend.pages.about.about', compact($about));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // $setting= Setting::first();
    //     $setting-> company_name =$request->company_name;
    //     $setting-> company_phone =$request-> company_phone;
    //     if($request->pic){
    //         if(File::exists('backend/logo/'.$setting->pic)){
    //             File::delete('backend/logo/'.$setting->pic);
    //             $image=$request->file('pic');
    //             $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
    //             $location=public_path('backend/logo/'.$imgCustomName);
    //             Image::make($image)->save($location);
    //             $setting->pic=$imgCustomName;
    //         }
    //     }
    public function update(Request $request)
    {
        $about= About::first();
        $about->name= $request->name;
        $about->dob= $request->dob;
        $about->address= $request->address;
        $about->number= $request->number;
        if($request->pic){
                if(File::exists('backend/pic/'.$about->pic)){
                    File::delete('backend/pic/'.$about->pic);
                    $image=$request->file('pic');
                    $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
                    $location=public_path('backend/pic/'.$imgCustomName);
                    Image::make($image)->save($location);
                    $about->pic=$imgCustomName;
                }
            }
        $about->email= $request->email;
        $about->website= $request->website;
        $about->project_complete= $request->project_complete;
        $about->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
