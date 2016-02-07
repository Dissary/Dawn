@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Hinzufügen')
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
            <h2 class="page-header">Füge einen Anime hinzu</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div id="addanime-form">
                @include('errors.list')
                {!! Form::open(['url' => 'anime']) !!}
                    @include('anime.partials.form', ['submitButtonText' => 'Anime hinzufügen'])
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