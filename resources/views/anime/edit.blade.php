@extends('templates.main')

{{-- Seitentitel --}}
@section('title')
    {{ $anime->name }} - Bearbeiten
@stop
{{-- Seitenbeschreibung --}}
@section('description')
    Informationen zu {{ $anime->name }}. Mit Dawn hast du immer neue Vorschläge parat!
@stop
{{-- Meta-Tags --}}
@section('meta')
    <meta name="robots" content="noindex" />
@stop


{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Bearbeiten: {{ $anime->name }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div id="editanime-form">
                @include('errors.list')
                {!! Form::model($anime, ['method' => 'PATCH', 'action' => ['AnimeController@update', $anime->id]]) !!}
                    @include('anime.partials.form', ['submitButtonText' => 'Aktualisieren'])
                {!! Form::close() !!}
            </div>
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