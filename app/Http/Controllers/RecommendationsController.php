<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecommendationsController extends Controller
{
    public function index()
    {
        return view('recs.index');
    }

    public function search()
    {
        return view('recs.search');
    }
}
