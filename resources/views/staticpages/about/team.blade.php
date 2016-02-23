@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Über das Team')
{{-- Seitenbeschreibung --}}
@section('description', 'Wer hat Dawn gemacht? Warum ist es entstanden? Erfahre alles auf dieser Seite!')

@section('top-fullwidth')
    <div id="banner">
        <div id="banner-content">
            <p id="banner-text">Wir machen Hobby zum Beruf.</p>
            <p id="banner-subtext">Wir teilen eine Liebe und Passion für Anime!</p>
        </div>
    </div>
@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Das Team</h2>
        </div>
        <div class="col-md-4 col-sm-6">
            <a class="team-item-link">
                <img class="img-responsive team-item" src="https://storage.googleapis.com/dissary/dawn/images/static/team-tim-1.png" alt="">
                <p class="team-item-text">Tim</p>
                <p class="team-item-subtext">Gründer und Entwicklung</p>
            </a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a class="team-item-link">
                <img class="img-responsive team-item" src="https://storage.googleapis.com/dissary/dawn/images/static/team-nico-1.png" alt="">
                <p class="team-item-text">Nico</p>
                <p class="team-item-subtext">Inhalte, Blog und Knecht</p>
            </a>
        </div>
    </div>
@stop

{{-- Skripte --}}
@section('scripts')
    <script src="https://storage.googleapis.com/dissary/dawn/images/static/page.js"></script>
@stop

{{-- CSS Dateien --}}
@section('css')
    <style>
        #page-wrapper {
            margin-top:50px;
        }

        .team-item{
            margin-bottom:30px;
            transition:200ms;
            border-radius:2px;
        }

        .team-item-hover{
            -webkit-filter: brightness(0.8) blur(5px);
            filter: brightness(0.5) blur(5px);
            transition:200ms;
        }

        .team-item-text{
            position:relative;
            text-align:center;
            top:-190px;
            font-size:26px;
            color:#FFFFFF;
            font-family: "Exo 2", sans-serif;
            height:0;
            text-shadow: 0px 0px 5px rgba(0, 0, 0, 1);
            opacity:0;
            transition:200ms;
        }

        .team-item-text-hover{
            opacity:1;
            transition:200ms;
        }

        .team-item-link:hover{
            text-decoration:none !important;
        }

        .team-item-subtext{
            position: relative;
            top: -160px;
            text-align: center;
            font-family: "Exo 2", sans-serif;
            color: #F7F7F7;
            font-size: 18px;
            height:0;
            margin:0;
            padding:0;
            opacity: 0;
            text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
            transition: 200ms;
        }

        .team-item-subtext-hover{
            opacity:1;
            transition:200ms;
        }
        #banner{
            background-image: url('https://storage.googleapis.com/dissary/dawn/images/dawn-team-image.png') !important;
        }
    </style>
@stop