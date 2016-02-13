<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class ProfileController extends Controller
{
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }
}
