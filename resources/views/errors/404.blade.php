@extends('templates.main')

{{-- Seitentitel --}}
@section('title', '404 - Nicht gefunden')
{{-- Seitenbeschreibung --}}
@section('description', '404!!!111')

@section('meta')
    <meta name="robots" content="noindex" />
@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">404 - Nicht gefunden!</h2>
        </div>
        <div class="col-lg-12">
            <p class="message">Die Seite <span id="wrong-path">/{{ Request::path() }}/</span> konnte leider nicht gefunden werden.</p>
            <p class="message">Du kannst gerne einen "Error Report" einreichen. <a href="/support/error-reports">Teach me, senpai!</a></p>
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
        #wrong-path{
            color:#2e6da4;
            text-decoration:underline;
        }
        .message{
            text-align: center;
        }
    </style>
@stop