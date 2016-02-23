@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Start')
{{-- Seitenbeschreibung --}}
@section('description', 'Dawn ist eine neue Seite, auf der du Vorschläge für ähnliche Anime deines Geschmacks bekommst.')


{{-- Suchfenster --}}
@section('top-fullwidth')
    <div id="search">
        <div id="search-content">
            <p id="search-text">Suche nach deinem nächsten Anime</p>
                <form method="POST" action="/search/" id="search-form">
                    <div class="input-group">
                        <input class="form-control" id="search-box" name="query" type="text" placeholder="Lostippen, um Suchergebnisse zu bekommen..." />
                        <span class="input-group-btn">
                            <button id="anime-search-button" class="btn btn-default" type="button">Suchen</button>
                        </span>
                    </div>
                </form>
        </div>
    </div>
@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Start</h2>
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
        #search{
            display: flex;
            align-items: center;
            justify-content: center;
            width:100%;
            height:250px;
            background-image: url('https://storage.googleapis.com/dissary/dawn/images/dawn-search-image.png');
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