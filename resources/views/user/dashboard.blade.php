@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Dashboard')
{{-- Seitenbeschreibung --}}
@section('description', 'Dawn ist eine neue Seite, auf der du Vorschläge für ähnliche Anime deines Geschmacks bekommst.')
{{-- Meta-Tags --}}
@section('meta')
    <meta name="robots" content="noindex" />
@stop

{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Dashboard</h2>
        </div>
        <div id="stream-content" class="col-lg-9 col-md-9">
            <div class="alert alert-info" role="alert"><strong>Hi, {{ Auth::user()->name }}!</strong> Du bist im Dashboard gelandet, wo du alles im Blick hast. Viel Spaß mit Dawn und hoffentlich viel Anime!</div>
            <div class="stream-item">
                <h3 class="stream-title">News</h3>
                <div class="stream-item-content">
                    Wer braucht schon Nachrichten?
                </div>
            </div>
            <div class="stream-item">
                <h3 class="stream-title">Anime</h3>
                <div class="stream-item-content">
                    <p  class="stream-item-detail">Du kannst dir deine Liste auch auf <a href="/user/profile/list/">/user/profile/list/{{ Auth::user()->pub_username }}/</a> ansehen!</p>
                </div>
            </div>
        </div>
        <div id="sidebar" class="col-lg-3 col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">Mein Profil</div>
                <div class="panel-body">
                    <p id="sidebar-name"><a href="/user/profile/show/{{ Auth::user()->pub_username }}">{{ Auth::user()->pub_username }}</a></p>
                    <p id="sidebar-realname">{{ Auth::user()->name }}</p>
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
    </style>
@stop