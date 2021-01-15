<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profil::latest()->paginate(5);
  
        return view('admin.home',compact('profils'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create');
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
            'nama_lengkap' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'no_hp' => 'required',
            'deskripsi' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
        ]);
  
        Profil::create($request->all());
   
        return redirect()->route('profils.index')
                        ->with('success','Profile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        return view('admin.show',compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('admin.profil.edit',compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nama' => 'required',
            'lokasi' => 'required',
            'no_hp' => 'required',
            'deskripsi' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
        ]);
  
        $profil->update($request->all());
  
        return redirect()->route('profils.index')
                        ->with('success','Profil updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();
  
        return redirect()->route('profils.index')
                        ->with('success','Profil deleted successfully');
    }
}
