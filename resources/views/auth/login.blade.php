@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Anmelden')
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
            <h2 class="page-header">Anmelden</h2>
        </div>
        <div class="col-lg-4 col-sm-5 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-offset-4">
            <div id="login-form">
                @include('errors.list')
                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input class="form-control" placeholder="senpai@bakamail.moe" name="email" type="email" value="{{ old('email') }}" id="mail">
                    </div>
                    <div class="form-group">
                        <label for="name">Passwort:</label>
                        <input class="form-control" placeholder="Passwort" name="password" type="password" id="password">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="">
                                Angemeldet bleiben
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary form-control" type="submit" value="Anmelden">
                    </div>
                </form>
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