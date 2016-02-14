<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;

use App\Animelist;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'animelist']);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function animelist($username)
    {
        $userlist = Animelist::where('owner_name', '=', $username)->first();

        if(!$userlist)
        {
            abort(404);
        }

        return view('user.public.list', compact('userlist'));
    }

    public function useranimelist()
    {
        $username = Auth::user()->pub_username;
        if(!Animelist::where('owner_name', '=', $username)->first())
            return redirect('user/profile/createlist');

        $userlist = Animelist::where('owner_name', '=', $username)->first();

        return view('user.public.list', compact('userlist'));
    }

    public function createList()
    {
        $username = Auth::user()->pub_username;

        if(!Animelist::where('owner_name', '=', $username)->first())
        {
            $list = new Animelist;
            $list->owner_name = Auth::user()->pub_username;
            $list->watched_anime = '';
            $list->planned_anime = '';
            $list->held_anime = '';
            $list->watching_anime = '';
            $list->dropped_anime = '';
            $list->save();
        }

        return redirect('/user/profile/list');
    }

    public function getList()
    {
        $username = Auth::user()->pub_username;

        $list = Animelist::where('owner_name', '=', $username)->first();

        return $list;
    }

    public function addToList($id, $state)
    {

    }
}
