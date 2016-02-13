@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Registrieren')
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
                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input class="form-control" placeholder="Tomoko Kuroki" name="name" type="text" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Nutzername:</label>
                        <input class="form-control" placeholder="BakaSenpai" name="pub_username" type="text" value="{{ old('public_usernamename') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input class="form-control" placeholder="tomoko@bakamail.moe" name="email" type="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Passwort:</label>
                        <input class="form-control" placeholder="Passwort" name="password" type="password">
                    </div>
                    <div class="form-group">
                        <label for="name">Passwort wiederholen:</label>
                        <input class="form-control" placeholder="Passwort wiederholen" name="password_confirmation" type="password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary form-control" type="submit" value="Registrieren">
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