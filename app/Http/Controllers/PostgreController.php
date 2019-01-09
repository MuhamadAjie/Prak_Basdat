<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postgre;

class PostgreController extends Controller
{
    public function index1(){
		$barangss = Postgre::all();
    	return view('home', ['barangss' => $barangss]);
	}
}
