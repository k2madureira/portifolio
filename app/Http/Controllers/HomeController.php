<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class HomeController extends Controller
{
    public function showHome() {
    	
    	$skills = Skill::latest()->get();
    	return view('home',compact('skills'));
	}

	public function showAbout() {
		return view('about.showAbout');
	}
}
