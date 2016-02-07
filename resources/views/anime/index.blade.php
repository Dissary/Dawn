@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Anime')
{{-- Seitenbeschreibung --}}
@section('description', 'Schau dir die neusten Anime an!')


{{-- Seiteninhalt --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Anime</h2>
        </div>
            @foreach($animes as $anime)
                <div class="col-md-4 col-sm-4">
                    <a href="{{ url('anime', [$anime->id]) }}">
                        <div class="anime-item">
                            <img class="anime-cover" src="" />
                            <p class="anime-name">{{ $anime->name }}</p>
                            <p class="anime-description">{!! $anime->description !!}</p>
                            <p class="anime-meta">{{ $anime->episodes }} Folgen &#64; {{ $anime->episodes_duration }} Minuten</p>
                        </div>
                    </a>
                </div>
            @endforeach
    </div>
@stop

{{-- Skripte --}}
@section('scripts')

@stop

{{-- CSS Dateien --}}
@section('css')
    <style> #page-wrapper { margin-top:30px; }</style>
@stop