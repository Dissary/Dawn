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
        $username = Auth::user()->pub_username;
        $list = Animelist::where('owner_name', '=', $username)->first();

        switch ($state)
        {
            case "watched":
                $list_items = explode(',', $list->watched_anime);

                if(array_search($id, $list_items) === false)
                {
                    if($list->watched_anime == "")
                        $list->watched_anime = $list->watched_anime . $id;
                    else
                    {
                        if($list->watched_anime != "")
                            $list->watched_anime = $list->watched_anime . ',' . $id;
                    }
                    $list->update();
                }

                break;
            case "watching":
                $list_items = explode(',', $list->watching_anime);

                if(array_search($id, $list_items) === false)
                {
                    if($list->watching_anime == "")
                        $list->watching_anime = $list->watching_anime . $id;
                    else
                    {
                        if($list->watching_anime != "")
                            $list->watching_anime = $list->watching_anime . ',' . $id;
                    }
                    $list->update();
                }

                break;
            case "paused":
                $list_items = explode(',', $list->paused_anime);

                if(array_search($id, $list_items) === false)
                {
                    if($list->paused_anime == "")
                        $list->paused_anime = $list->paused_anime . $id;
                    else
                    {
                        if($list->paused_anime != "")
                            $list->paused_anime = $list->paused_anime . ',' . $id;
                    }
                    $list->update();
                }

                break;
            case "dropped":
                $list_items = explode(',', $list->dropped_anime);

                if(array_search($id, $list_items) === false)
                {
                    if($list->dropped_anime == "")
                        $list->dropped_anime = $list->dropped_anime . $id;
                    else
                    {
                        if($list->dropped_anime != "")
                            $list->dropped_anime = $list->dropped_anime . ',' . $id;
                    }
                    $list->update();
                }

                break;
            case "planned":
                $list_items = explode(',', $list->planned_anime);

                if(array_search($id, $list_items) === false)
                {
                    if($list->planned_anime == "")
                        $list->planned_anime = $list->planned_anime . $id;
                    else
                    {
                        if($list->planned_anime != "")
                            $list->planned_anime = $list->planned_anime . ',' . $id;
                    }
                    $list->update();
                }

                break;
        }

        return redirect('user/profile/list/');
    }
}
