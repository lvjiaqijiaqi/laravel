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
    	if ($input == "死猪") {
    		return "晚安";
    	}
    	return back()->withErrors(['错啦,亲']);
    }
}
