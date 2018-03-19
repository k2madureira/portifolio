<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillController extends Controller
{
    public function show () {

    	$skills = Skill::latest()->get();
    	return view('personal.showPer',compact('skills'));
    }

    public function updateSkill () {

    }

    public function updateDescription (Request $request) {

    	$this->validate(request(), [

   				'description' => 'required'
   				]);
    	

    $data = Skill::find(1);
    $data->description = $request->input('description');
    $data->save();
   		

    $skills = Skill::latest()->get();

    	return view('home',compact('skills'));
    }

}
