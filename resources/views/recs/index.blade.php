@extends('templates.recs')

{{-- Seitentitel --}}
@section('title', 'Empfehlungen')
{{-- Seitenbeschreibung --}}
@section('description', 'Du willst neue Anime kennenlernen? Melde dich jetzt bei Dawn an und bekomme auf dich zugeschnittene Empfehlungen.')

{{-- Suchfenster --}}
@section('search')
    <div id="rec-search">
        <div id="search-content">
            <p id="search-text">Deine persönlichen Empfehlungen</p>
            @if(Auth::check())
                <form method="POST" action="/recommendations/" id="search-form">
                    <div class="input-group">
                        <input class="form-control" id="search-box" name="query" type="text" placeholder="Tippe etwas ein, um Vorschläge zu bekommen..." />
                        <span class="input-group-btn">
                            <button id="anime-search-button" class="btn btn-default" type="button">Suchen</button>
                        </span>
                    </div>
                </form>
            @else
                <p id="search-error">Bitte melde dich zuerst an, bevor du nach Empfehlungen suchst.</p>
            @endif
        </div>
    </div>
@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Empfehlungen</h2>
        </div>
        <div class="col-lg-10">

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
            margin-top:50px;
        }
        #rec-search{
            display: flex;
            align-items: center;
            justify-content: center;
            width:100%;
            height:250px;
            background-image: url('https://storage.googleapis.com/dissary/dawn/images/dawn_search_bg.jpg');
            background-repeat: no-repeat;
            background-position: center;
            box-shadow: inset 0px 0px 20px 0px rgba(0,0,0,0.75);
        }
        #search-content{
            max-width: 50%;
        }
        #search-text{
            text-align: center;
            color:#fff;
            font-family: "Exo 2", sans-serif;
            font-weight: 500;
            font-size: 32px;
            text-shadow: 0px 0px 10px rgba(0,0,0,0.5), -1px 0 #9C9C9C, 0 1px #9C9C9C;
        }
        #search-error{
            text-align: center;
            color:#ffffff;
            font-size:22px;
            text-shadow: 0px 0px 5px rgba(0,0,0,0.2);
        }
        #search-box{
            height:50px;
            font-size:18px;
        }
        #anime-search-button{
            height:50px;
        }
        #search-form{
            border-radius:5px;
            max-width:600px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.5);
        }
    </style>
@stop