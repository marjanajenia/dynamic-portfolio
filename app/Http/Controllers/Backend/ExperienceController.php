<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experience = Experience::orderby('id', 'asc')->get();
        return view('backend.pages.experience.manageexperience', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.experience.addexperience');
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
            'session' => 'required',
            'position' => 'required',
            'institute' => 'required',
            'description' => 'required',
        ]);
        $experience = new Experience();
        $experience->session = $request->session;
        $experience->position = $request->position;
        $experience->institute = $request->institute;
        $experience->description = $request->description;
        $experience->save();
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
        $experience = Experience::find($id);
        return view('backend.pages.experience.editexperience', compact('experience'));
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
            'session' => 'required',
            'position' => 'required',
            'institute' => 'required',
            'description' => 'required',
        ]);
        $experience = Experience::find($id);
        $experience->session = $request->session;
        $experience->position = $request->position;
        $experience->institute = $request->institute;
        $experience->description = $request->description;
        $experience->update();
        return redirect()->route('experience.manage');
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
