<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){
    //# prendo i film
    //posso modificarli
    $movies=[];
    return view('movies.index', compact('movies'));
    }
}