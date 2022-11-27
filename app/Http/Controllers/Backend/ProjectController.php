<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Project;
use Image;
use File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::orderby('id','asc')->get();
        return view('backend.pages.project.manageproject', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.project.addproject');
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
        $project= new Project();
        if($request->pic){
            $image=$request->file('pic');
            $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/project/'.$imgCustomName);
            Image::make($image)->save($location);
            $project->pic=$imgCustomName;
        }
        $project->service=$request->service;
        $project->description=$request->description;
        $project->save();
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
        $project = Project::find($id);
        return view('backend.pages.project.editproject', compact('project'));
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
        $project= Project::find($id);
        if($request->pic){
            if(File::exists('backend/project/'.$project->pic)){
                File::delete('backend/project/'.$project->pic);
                $image=$request->file('pic');
                $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
                $location=public_path('backend/project/'.$imgCustomName);
                Image::make($image)->save($location);
                $project->pic=$imgCustomName;
            }
        }
        $project->service=$request->service;
        $project->description=$request->description;
        $project->update();
        return redirect()->route('project.manage');
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
