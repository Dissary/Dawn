<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function about()
    {
        return view('staticpages.about.page');
    }

    public function aboutteam()
    {
        return view('staticpages.about.team');
    }

    public function transparency()
    {
        return view('staticpages.about.transparancy');
    }
}
