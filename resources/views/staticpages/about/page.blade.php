@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Über - Team')
{{-- Seitenbeschreibung --}}
@section('description', 'Wer hat Dawn gemacht? Erfahre alles auf dieser Seite!')


{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Über das Team</h2>
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