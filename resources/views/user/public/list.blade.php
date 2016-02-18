@extends('templates.main')

{{-- Seitentitel --}}
@section('title')
Liste von {!! $userlist->owner_name !!}
@stop
{{-- Seitenbeschreibung --}}
@section('description')
Schau dir jetzt die Liste von {{ $userlist->owner_name }} an! Erstelle auch du deine eigene Liste auf Dawn!
@stop
{{-- Meta-Tags --}}
@section('meta')

@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Liste von {!! $userlist->owner_name !!}</h2>
        </div>
        <div id="list-sidebar" class="col-lg-3 col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">Profil von {{ $userlist->owner_name }}</div>
                <div class="panel-body">
                    <p id="sidebar-name"><a href="/user/profile/show/{{ $userlist->owner_name }}">{{ $userlist->owner_name }}</a></p>
                    {{-- <p id="sidebar-realname">{{ App\User::where('pub_username', '=', $userlist->owner_name)->first()->name }}</p> --}}
                </div>
            </div>
        </div>
        <div id="list-content" class="col-lg-9 col-md-9">
            <div class="list-table">
                <h3 class="list-title" id="watching">Am Schauen</h3>
                <div class="panel panel-default table-container">
                    <table class="table-bordered table-anime">
                        <tr class="table-head"><th class="table-head-item" id="table-cover">Cover</th><th class="table-head-item" id="table-name">Name</th><th class="table-head-item" id="table-episodes">Folgen</th></tr>
                        <tbody>
                        @if(!$userlist->watching_anime == "")
                            @foreach(explode(',', $userlist->watching_anime) as $anime)
                                <tr class="anime-table-row">
                                    <td class="table-cover-image"><img class="table-cover-item" src="https://storage.googleapis.com/dissary/dawn/images/covers/{{ App\Anime::find($anime)->imageurl }}" /></td>
                                    <td class="table-item table-name-item"><a href="/anime/{{ App\Anime::find($anime)->id }}">{{ App\Anime::find($anime)->name }}</a></td>
                                    <td class="table-item table-episodes-item">{{ App\Anime::find($anime)->episodes }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="list-table">
                <h3 class="list-title">Geschaut</h3>
                <div class="panel panel-default table-container">
                    <table class="table-bordered table-anime">
                        <tr class="table-head"><th class="table-head-item" id="table-cover">Cover</th><th class="table-head-item" id="table-name">Name</th><th class="table-head-item" id="table-episodes">Folgen</th></tr>
                        <tbody>
                        @if(!$userlist->watched_anime == "")
                            @foreach(explode(',', $userlist->watched_anime) as $anime)
                                <tr class="anime-table-row">
                                    <td class="table-cover-image"><img class="table-cover-item" src="https://storage.googleapis.com/dissary/dawn/images/covers/{{ App\Anime::find($anime)->imageurl }}" /></td>
                                    <td class="table-item table-name-item"><a href="/anime/{{ App\Anime::find($anime)->id }}">{{ App\Anime::find($anime)->name }}</a></td>
                                    <td class="table-item table-episodes-item">{{ App\Anime::find($anime)->episodes }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="list-table">
                <h3 class="list-title">Geplant</h3>
                <div class="panel panel-default table-container">
                    <table class="table-bordered table-anime">
                        <tr class="table-head"><th class="table-head-item" id="table-cover">Cover</th><th class="table-head-item" id="table-name">Name</th><th class="table-head-item" id="table-episodes">Folgen</th></tr>
                        <tbody>
                        @if(!$userlist->planned_anime == "")
                            @foreach(explode(',', $userlist->planned_anime) as $anime)
                                <tr class="anime-table-row">
                                    <td class="table-cover-image"><img class="table-cover-item" src="https://storage.googleapis.com/dissary/dawn/images/covers/{{ App\Anime::find($anime)->imageurl }}" /></td>
                                    <td class="table-item table-name-item"><a href="/anime/{{ App\Anime::find($anime)->id }}">{{ App\Anime::find($anime)->name }}</a></td>
                                    <td class="table-item table-episodes-item">{{ App\Anime::find($anime)->episodes }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="list-table">
                <h3 class="list-title">Pausiert</h3>
                <div class="panel panel-default table-container">
                    <table class="table-bordered table-anime">
                        <tr class="table-head"><th class="table-head-item" id="table-cover">Cover</th><th class="table-head-item" id="table-name">Name</th><th class="table-head-item" id="table-episodes">Folgen</th></tr>
                        <tbody>
                        @if(!$userlist->held_anime == "")
                            @foreach(explode(',', $userlist->held_anime) as $anime)
                                <tr class="anime-table-row">
                                    <td class="table-cover-image"><img class="table-cover-item" src="https://storage.googleapis.com/dissary/dawn/images/covers/{{ App\Anime::find($anime)->imageurl }}" /></td>
                                    <td class="table-item table-name-item"><a href="/anime/{{ App\Anime::find($anime)->id }}">{{ App\Anime::find($anime)->name }}</a></td>
                                    <td class="table-item table-episodes-item">{{ App\Anime::find($anime)->episodes }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="list-table">
                <h3 class="list-title">Abgebrochen</h3>
                <div class="panel panel-default table-container">
                    <table class="table-bordered table-anime">
                        <tr class="table-head"><th class="table-head-item" id="table-cover">Cover</th><th class="table-head-item" id="table-name">Name</th><th class="table-head-item" id="table-episodes">Folgen</th></tr>
                        <tbody>
                        @if(!$userlist->dropped_anime == "")
                            @foreach(explode(',', $userlist->dropped_anime) as $anime)
                                <tr class="anime-table-row">
                                    <td class="table-cover-image"><img class="table-cover-item" src="https://storage.googleapis.com/dissary/dawn/images/covers/{{ App\Anime::find($anime)->imageurl }}" /></td>
                                    <td class="table-item table-name-item"><a href="/anime/{{ App\Anime::find($anime)->id }}">{{ App\Anime::find($anime)->name }}</a></td>
                                    <td class="table-item table-episodes-item">{{ App\Anime::find($anime)->episodes }}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Skripte --}}
@section('scripts')

@stop

{{-- CSS Dateien --}}
@section('css')
    <style>
        #page-wrapper {
            margin-top:30px;
        }
        #watching{
            margin-top:0;
        }
        #sidebar-name{
            text-align: center;
            font-size: 20px;
            margin-bottom: 5px;
            font-family: "Exo 2", sans-serif;
        }
        #sidebar-realname{
            text-align: center;
            font-size: 16px;
            margin-top:0;
            margin-bottom: 10px;
            font-family: "Exo 2", sans-serif;
        }
        .list-table{

        }
        .list-title{

        }
        .anime-table-row{
            height:50px;
        }
        .table-anime{
            width:100%;
            border-radius: 2.5px;
        }
        .page-container{
            padding:10px;
            background-color:#ffffff;
        }
        .page-content-header{
            background-color:#ffffff;
            margin-bottom:10px;
        }
        .table-item{
            padding:10px;
        }
        .table-head-item{
            padding-left:10px;
            padding-right:10px;
            border-top:none !important;
        }
        .table-name-item{
            font-size:22px;
            font-family:"Exo 2", sans-serif;
        }
        .table-head{
            height:34px;
            background: linear-gradient(to bottom, #ffffff 0%,#EFEFEF 100%);
        }
        .table-cover-item{
            position:relative;
            height:100%;
        }
        .table-cover-image{
            height:50px;
            text-align: center;
        }
        .table-container{
            box-shadow: 0 1px 3px rgba(0,0,0,.15);
        }
        .table-episodes-item{
            font-size:18px;
            font-family:"Exo 2", sans-serif;
        }

        @media (max-width: 512px){
            .table-name-item{
                font-size:14px;
                font-family:"Exo 2", sans-serif;
            }
            .table-episodes-item{
                font-size:14px;
                font-family:"Exo 2", sans-serif;
            }
        }
    </style>
@stop