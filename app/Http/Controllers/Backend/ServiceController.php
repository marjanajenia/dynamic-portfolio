<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Service;
use File;
use Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::orderby('id', 'asc')->get();
        return view('backend.pages.service.manageservice', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.service.addservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pic' => 'required',
            'service' => 'required',
            'description' => 'required',
        ]);
        $service= new Service();
        if($request->pic){
                $image=$request->file('pic');
                $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
                $location=public_path('backend/service/'.$imgCustomName);
                Image::make($image)->save($location);
                $service->pic=$imgCustomName;
            }
        $service->service =$request->service;
        $service->description =$request->description;
        $service->save();
        return redirect()->back();
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
        $service = Service::find($id);
        return view('backend.pages.service.editservice', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'service' => 'required',
            'description' => 'required',
        ]);
        $service= Service::find($id);
        if($request->pic){
            if(File::exists('backend/service/'.$service->pic)){
                File::delete('backend/service/'.$service->pic);
                $image=$request->file('pic');
                $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
                $location=public_path('backend/service/'.$imgCustomName);
                Image::make($image)->save($location);
                $service->pic=$imgCustomName;
            }
        }
        $service->service =$request->service;
        $service->description =$request->description;
        $service->update();
        return redirect()->route('service.manage');
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
