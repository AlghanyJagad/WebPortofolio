<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Education;
use App\Experience;
use App\Profil;
use App\Resume;
use App\Skill;

class HomeController extends Controller
{   
    public function index(Request $request)
    {
        $dataeducation = DB::table('educations')->get();
        $dataexperience = DB::table('experiences')->get();
        $dataprofil = DB::table('profils')->get();
        $dataresume = DB::table('resumes')->get();
        $dataskill = DB::table('skills')->get();
        return view('index')
        ->with('education',$dataeducation)
        ->with('experience',$dataexperience)
        ->with('profil',$dataprofil)
        ->with('resume',$dataresume)
        ->with('skill',$dataskill);
    }

    public function resume(Request $request)
    {
        $dataeducation = DB::table('educations')->get();
        $dataexperience = DB::table('experiences')->get();
        $dataprofil = DB::table('profils')->get();
        $dataresume = DB::table('resumes')->get();
        $dataskill = DB::table('skills')->get();
        return view('resume')
        ->with('education',$dataeducation)
        ->with('experience',$dataexperience)
        ->with('profil',$dataprofil)
        ->with('resume',$dataresume)
        ->with('skill',$dataskill);
    }

    public function portfolio(Request $request)
    {
        $dataeducation = DB::table('educations')->get();
        $dataexperience = DB::table('experiences')->get();
        $dataprofil = DB::table('profils')->get();
        $dataresume = DB::table('resumes')->get();
        $dataskill = DB::table('skills')->get();
        return view('portfolio')
        ->with('education',$dataeducation)
        ->with('experience',$dataexperience)
        ->with('profil',$dataprofil)
        ->with('resume',$dataresume)
        ->with('skill',$dataskill);
    }

    public function contact(Request $request)
    {
        $dataeducation = DB::table('educations')->get();
        $dataexperience = DB::table('experiences')->get();
        $dataprofil = DB::table('profils')->get();
        $dataresume = DB::table('resumes')->get();
        $dataskill = DB::table('skills')->get();
        return view('contact')
        ->with('education',$dataeducation)
        ->with('experience',$dataexperience)
        ->with('profil',$dataprofil)
        ->with('resume',$dataresume)
        ->with('skill',$dataskill);
    }
}
