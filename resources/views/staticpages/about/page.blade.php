@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Über')
{{-- Seitenbeschreibung --}}
@section('description', 'Wer hat Dawn gemacht? Erfahre alles auf dieser Seite!')

@section('top-fullwidth')
    <div id="banner">
        <div id="banner-content">
            <p id="banner-text">Alles was du brauchst an einem Ort.</p>
            <p id="banner-subtext">Anime, Informationen, Community, News, Empfehlungen</p>
        </div>
    </div>
@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Über die Website</h2>
        </div>
    </div>
@stop

{{-- Skripte --}}
@section('scripts')

@stop

{{-- CSS Dateien --}}
@section('css')
    <style>
        #banner{
            background-image: url('https://storage.googleapis.com/dissary/dawn/images/dawn-about-image.png') !important;
        }
    </style>
@stop