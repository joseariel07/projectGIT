<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index() {
        $career = Career::all();
        return view('career.index')->with('data',$career);
    }        
}