<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.search');
    }
    public function search(Request $request)
    {
        if($request->ajax())
        {
        $output="";
        $progams=DB::table('programs')->where('prog_name','LIKE','%'.$request->search."%")->get();
            if($progams)
            {
                foreach ($progams as $key => $progam) {
                $output.='<tr>'.
                '<td>'.$progam->prog_name.'</td>'.
                '</tr>';
                }
            return Response($output);
            }
        }
    }
}

