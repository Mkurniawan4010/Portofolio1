<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Organization;
use App\Models\AboutContent;

class HomeController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('category')->orderBy('order')->get();
        $certificates = Certificate::orderBy('order')->limit(6)->get();
        $organizations = Organization::orderBy('is_active', 'desc')->orderBy('start_date', 'desc')->limit(4)->get();
        $experiences = Experience::orderBy('is_current', 'desc')->orderBy('start_date', 'desc')->get();
        
        return view('index', compact('skills', 'certificates', 'organizations', 'experiences'));
    }

    public function about()
    {
        $aboutContent = AboutContent::pluck('content', 'key');
        $skills = Skill::count();
        $certificates = Certificate::count();
        $organizations = Organization::count();
        $experiences = Experience::count();

        return view('about', compact('aboutContent', 'skills', 'certificates', 'organizations', 'experiences'));
    }

    public function certificates()
    {
        $certificates = Certificate::orderBy('order')->paginate(9);
        
        return view('certificates', compact('certificates'));
    }

    public function organizations()
    {
        $organizations = Organization::orderBy('is_active', 'desc')->orderBy('start_date', 'desc')->paginate(9);
        
        return view('organizations', compact('organizations'));
    }

    public function contact()
    {
        return view('contact');
    }
}
