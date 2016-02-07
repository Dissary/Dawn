@extends('templates.main')

{{-- Seitentitel --}}
@section('title')
{{ $anime->name }}
@stop
{{-- Seitenbeschreibung --}}
@section('description')
Informationen zu {{ $anime->name }}. Mit Dawn hast du immer neue Vorschläge parat!
@stop


{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">{{ $anime->name }}</h2>
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