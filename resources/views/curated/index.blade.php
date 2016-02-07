@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Start')
{{-- Seitenbeschreibung --}}
@section('description', 'Dawn ist eine neue Seite, auf der du Vorschläge für ähnliche Anime deines Geschmacks bekommst.')


{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Willkommen bei Dawn!</h2>
        </div>
    </div>
@stop

{{-- Skripte --}}
@section('scripts')

@stop

{{-- CSS Dateien --}}
@section('css')
    <style> #page-wrapper { margin-top:30px; }</style>
@stop