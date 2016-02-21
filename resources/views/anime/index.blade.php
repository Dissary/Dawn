@extends('templates.main')

{{-- Seitentitel --}}
@section('title', 'Anime')
{{-- Seitenbeschreibung --}}
@section('description', 'Schau dir die neusten Anime an!')

<?php $anime_count = 0; $anime_duration = 0 ?>

{{-- Seiteninhalt --}}
@section('content')
        <div class="row">
            <div class="page-container">
                <div class="col-md-10">
                    <div class="page-content-header">
                        <h2 class="page-header">Anime</h2>
                    </div>
                        <div class="panel panel-default table-container">
                            <table class="table-bordered table-anime">
                                <tr class="table-head"><th class="table-head-item" id="table-cover">Cover</th><th class="table-head-item" id="table-name">Name</th><th class="table-head-item" id="table-episodes">Folgen</th></tr>
                                <tbody>
                                @foreach($animes as $anime)
                                    <?php $anime_count++; $anime_duration = $anime_duration + $anime->episodes * $anime->episodes_duration ?>
                                        <tr class="anime-table-row">
                                            <td class="table-cover-image"><img class="table-cover-item" src="https://storage.googleapis.com/dissary/dawn/images/covers/{{ $anime->imageurl }}" /></td>
                                            <td class="table-item table-name-item"><a href="/anime/{{ $anime->id }}">{{ $anime->name }}</a></td>
                                            <td class="table-item table-episodes-item">{{ $anime->episodes }}</td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Wusstest du schon?</h3>
                        </div>
                        <div class="panel-body">
                            <p class="table-description">Bei uns sind im Moment {{ $anime_count }} Anime gelistet. Das wären insgesamt {{ round($anime_duration/60, 2) }} Stunden.</p>
                        </div>
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
    {!! Html::style('css/anime-list.css') !!}
    <style>
        #page-wrapper {
            margin-top:30px;
        }
        .anime-item{
            /*
            height:150px;
            width:auto;
            background-color:#FFFFFF;
            border-radius:5px;
            border:#cccccc 1px solid;
            margin-top:10px;
            */
        }
        .anime-table-row{
            height:75px;
        }
        .table-anime{
            width:100%;
            border-radius: 2.5px;
        }
        .page-container{
            padding:10px;
            background-color:#ffffff;
        }
        .page-content-header{
            background-color:#ffffff;
            margin-bottom:10px;
        }
        .table-item{
            padding:10px;
        }
        .table-head-item{
            padding-left:10px;
            padding-right:10px;
            border-top:none !important;
        }
        .table-name-item{
            font-size:22px;
            font-family:"Exo 2", sans-serif;
        }
        .table-head{
            height:34px;
            background: linear-gradient(to bottom, #ffffff 0%,#EFEFEF 100%);
        }
        .table-cover-item{
            position:relative;
            height:100%;
        }
        .table-cover-image{
           height:75px;
           text-align: center;
        }
        .table-container{
            box-shadow: 0 1px 3px rgba(0,0,0,.15);
        }
        .table-episodes-item{
            font-size:18px;
            font-family:"Exo 2", sans-serif;
        }

        @media (max-width: 512px){
            .table-name-item{
                font-size:14px;
                font-family:"Exo 2", sans-serif;
            }
            .table-episodes-item{
                font-size:14px;
                font-family:"Exo 2", sans-serif;
            }
        }
        .table-description{
            font-size:16px;
            margin-bottom:0;
        }
    </style>
@stop