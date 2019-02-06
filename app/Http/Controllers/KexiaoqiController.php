<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KexiaoqiController extends Controller
{
    public function home()
    {
    	return view('kexiaoqi/home');
    }
	public function result(Request $request)
    {
    	$input = $request->name;
    	if ($input == "猪") {
    		return view('kexiaoqi/result');
    	}
    	return back()->withErrors(['错啦,亲']);
    }
    public function echo(Request $request)
    {
        return view('kexiaoqi/echo');
    }
}
