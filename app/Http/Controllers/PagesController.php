<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = ' Welcome to Laravel';
        // return view('pages.index' , compact('title')); #single pass
        return view('pages.index')->with ('title',$title); #multiple pass

    }

    public function about(){
        $title = ' About us';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=> 'Services',
            'services'=> [' Web Design' , 'Developing']
        );

        return view('pages.services')->with($data);
    }
}
