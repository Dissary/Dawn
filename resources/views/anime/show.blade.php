@extends('templates.main')

{{-- Seitentitel --}}
@section('title')
{{ $anime->name }}
@stop
{{-- Seitenbeschreibung --}}
@section('description')
Informationen zu {{ $anime->name }}. Mit Dawn hast du immer neue Vorschläge parat!
@stop
{{-- Meta Tags --}}
@section('meta')
    <meta property="og:url"                content="https://dawn.dissarystudios.net/anime/{{ $anime->id }}" />
    <meta property="og:title"              content="{{ $anime->name }}" />
    <meta property="og:description"        content="{{ mb_substr($anime->description, 0, 140, "UTF-8") }}..." />
    <meta property="og:image"              content="https://storage.googleapis.com/dissary/dawn/images/banner/{{ $anime->headerimg_url }}" />
@stop


{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12" id="header-image">
            <div class="img-responsive" style="background-image:url('https://storage.googleapis.com/dissary/dawn/images/banner/{{ $anime->headerimg_url }}');">
                <div class="unresponsive-cover" style="background-image:url('https://storage.googleapis.com/dissary/dawn/images/covers/{{ $anime->imageurl }}');"></div>
                <a href="https://www.youtube.com/watch?v={{ $anime->op_yt_id }}" target="_blank" id="youtube-link">
                    <div class="unresponsive-cover" id="unresponsive-youtube"><p>Opening ansehen!</p></div>
                </a>
            </div>
        </div>
    </div>
    <div class="row" id="anime-info">
        <div class="col-lg-12">
            <h2 id="anime-title">{{ $anime->name }}</h2>
            <h4 id="anime-alttitle">{{ $anime->altname }}</h4>
        </div>
        <div id="anime-meta" class="col-lg-3">
            <div id="anime-meta-box">
                <p class="anime-meta-info">Erste Folge: {{ $anime->released->format('d.m.Y') }}</p>
                <p class="anime-meta-info">Folgen: {{ $anime->episodes }}</p>
                <p class="anime-meta-info">Dauer pro Folge: {{ $anime->episodes_duration }} Minuten</p>
                <p class="anime-meta-info">Gesamtlänge: {{ round($anime->episodes*$anime->episodes_duration/60, 2) }} Stunden</p>
                <p class="anime-meta-info">Kategorien: {{ $anime->categories }}</p>
                <p class="anime-meta-info">MyAnimeList: <a href="http://myanimelist.net/anime/{{ $anime->mal_id }}">{{ $anime->mal_id }}</a></p>
                <div class="btn-group" id="list-buttom">
                    <a href="/user/profile/addtolist/{{ $anime->id }}/watched" class="btn btn-success" role="button">Geschaut</a>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Mehr...</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="/user/profile/addtolist/{{ $anime->id }}/planned">Geplant</a></li>
                        <li><a href="/user/profile/addtolist/{{ $anime->id }}/watching">Am Schauen</a></li>
                        <li><a href="/user/profile/addtolist/{{ $anime->id }}/dropped">Abgebrochen</a></li>
                        <li><a href="/user/profile/addtolist/{{ $anime->id }}/paused">Pausiert</a></li>
                    </ul>
                </div>
                <br>
                <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
            </div>
        </div>
        <div id="anime-description" class="col-lg-9">
            <p class="anime-text">{{ $anime->description }}</p>
        </div>
    </div>
@stop

{{-- Skripte --}}
@section('scripts')

@stop

{{-- CSS Dateien --}}
@section('css')
    <style>
        @import url(https://fonts.googleapis.com/earlyaccess/notosansjp.css);
        #page-wrapper { margin-top:30px; }
        #header-image {
            max-height:350px;
            box-shadow: 0 1px 3px rgba(0,0,0,.25);
            padding:0;
        }
        #header-image div {
            height:350px;
            margin: 0 auto;
            background-size:cover;
            background-position: 50% 50%;
        }
        #anime-info {
            box-shadow: 0 1px 3px rgba(0,0,0,.25);
            margin-top:10px;
            background-color:#fff;
        }
        #anime-title{
            margin-top:10px;
            font-family: "Exo 2", sans-serif;
            text-align: center;
        }
        #anime-title:after{
            content: " ";
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 1px;
            background-image: linear-gradient(270deg,transparent 10%,#ddd 50%,transparent 90%);
        }
        #anime-alttitle{
            text-align: center;
            font-weight: 300;
            font-family: 'Noto Sans JP', sans-serif;
        }
        .unresponsive-cover{
            height: 230px !important;
            width: 150px;
            position: absolute;
            bottom: -65px;
            left: 50px;
            border-radius: 2px;
            border: #Fff 0.5px solid;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,.25);
        }
        #unresponsive-youtube{
            top: 40px;
            right: 20px;
            left: auto;
            bottom: auto;
            height: 60px !important;
            width: 200px;
            opacity: 0.95;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #unresponsive-youtube p{
            font-size: 20px;
            font-family: "Exo 2", sans-serif;
            margin: 0 0 4px;
        }
        #anime-description{
            padding:20px;
        }
        .anime-text{
            font-size:16px;
            font-family: "Exo 2", sans-serif;
        }
        #anime-meta{
            padding:20px;
        }
        .anime-meta-info{
            font-size:16px;
            color:#4783BA;
            font-family: "Exo 2", sans-serif;
        }
        #list-buttom{
            margin-bottom:10px;
        }
    </style>
@stop