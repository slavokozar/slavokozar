<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        $education = Education::all();
        $experience = Experience::all();
        $skills = Skill::all();
        $certificates = Certificate::all();

        return view('public.cv', compact(['education', 'experience', 'certificates', 'skills']));
    }
}
