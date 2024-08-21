<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

	
	public function Show()
	{
        $name='<strong>Taylor</strong>';
        return view('welcome',compact('name'));
	}
	
}
