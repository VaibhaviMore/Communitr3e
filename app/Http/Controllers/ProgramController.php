<?php

namespace App\Http\Controllers;

use App\Programs;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        if(!empty(request()->get('searchProgDur')) and !empty(request()->get('searchProgCat')) and !empty(request()->get('searchProgName'))) {
            $programs = Programs::where('prog_duration', request()->get('searchProgDur'))->where('prog_category', request()->get('searchProgCat'))->where('prog_name', 'like', "%" . request()->get('searchProgName') . "%")->paginate(3);
        }
        else if(!empty(request()->get('searchProgDur')) and !empty(request()->get('searchProgCat'))) {
            $programs = Programs::where('prog_duration', request()->get('searchProgDur'))->where('prog_category', request()->get('searchProgCat'))->paginate(3);
        }
        else if(!empty(request()->get('searchProgDur')) and !empty(request()->get('searchProgName'))) {
            $programs = Programs::where('prog_duration', request()->get('searchProgDur'))->where('prog_category', request()->get('searchProgCat'))->where('prog_name', 'like', "%" . request()->get('searchProgName') . "%")->paginate(3);
        }
        else if(!empty(request()->get('searchProgCat')) and !empty(request()->get('searchProgName'))) {
            $programs = Programs::where('prog_category', request()->get('searchProgCat'))->where('prog_name', 'like', "%" . request()->get('searchProgName') . "%")->paginate(3);
        }
        else if(!empty(request()->get('searchProgDur'))) {
            $programs = Programs::where('prog_duration', request()->get('searchProgDur'))->paginate(3);
        }
        else if(!empty(request()->get('searchProgCat'))) {
            $programs = Programs::where('prog_category', request()->get('searchProgCat'))->paginate(3);
        }
        else if(!empty(request()->get('searchProgName'))) {
            $programs = Programs::where('prog_name', 'like', "%" . request()->get('searchProgName') . "%")->paginate(3);
        }
        else {
            $programs = Programs::paginate(3);
        }
        $progCategories = Programs::distinct('prog_category')->get(['prog_category']);
        $progDurations = Programs::distinct('prog_duration')->get(['prog_duration']);
        return view('program-list', compact('programs', 'progCategories', 'progDurations'));
    }
    
    public function show(Programs $program) {
       $requirements = $program->requirements();
       return view('program-details',compact('program', 'requirements'));
    }
}
