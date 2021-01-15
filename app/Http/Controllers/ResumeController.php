<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::latest()->paginate(5);
  
        return view('admin.resume.index',compact('resumes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resume.create');
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
            'link_git' => 'required',
            'nama_projek' => 'required',
            'deskripsi' => 'required',
        ]);
  
        Resume::create($request->all());
   
        return redirect()->route('resumes.index')
                        ->with('success','Resume created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        return view('admin.resume.show',compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        return view('admin.resume.edit',compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        $request->validate([
            'link_git' => 'required',
            'nama_projek' => 'required',
            'deskripsi' => 'required',
        ]);
  
        $resume->update($request->all());
  
        return redirect()->route('resumes.index')
                        ->with('success','Resume updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
  
        return redirect()->route('resumes.index')
                        ->with('success','Resume deleted successfully');
    }
}
