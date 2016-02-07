<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'z.B.: Bleach']) !!}
</div>
<div class="form-group">
    {!! Form::label('altname', 'Alternativer Name:') !!}
    {!! Form::text('altname', null, ['class' => 'form-control', 'placeholder' => 'z.B.: ブリーチ']) !!}
</div>
<div class="form-group">
    {!! Form::label('released', 'Erste Folge lief am:') !!}
    {!! Form::input('date', 'released', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Beschreibung:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('imageurl', 'Coverbild:') !!}
    {!! Form::text('imageurl', null, ['class' => 'form-control', 'placeholder' => 'Nur der Dateiname vom Bild, Rest kommt automatisch.']) !!}
</div>
<div class="form-group">
    {!! Form::label('headerimg_url', 'Titelbild: (auf der Detailseite)') !!}
    {!! Form::text('headerimg_url', null, ['class' => 'form-control', 'placeholder' => 'Nur der Dateiname vom Bild, Rest kommt automatisch.']) !!}
</div>
<div class="form-group">
    {!! Form::label('episodes', 'Episodenanzahl:') !!}
    {!! Form::text('episodes', null, ['class' => 'form-control', 'placeholder' => 'z.B.: 12']) !!}
</div>
<div class="form-group">
    {!! Form::label('episodes_duration', 'Episodendauer: (in Minuten)') !!}
    {!! Form::text('episodes_duration', null, ['class' => 'form-control', 'placeholder' => 'z.B.: 23']) !!}
</div>
<div class="form-group">
    {!! Form::label('categories', 'Kategorien: (mit Komma getrennt)') !!}
    {!! Form::text('categories', null, ['class' => 'form-control', 'placeholder' => 'z.B.: Action, Comedy, Superpower']) !!}
</div>
<div class="form-group">
    {!! Form::label('tags', 'Tags: (mit Komma getrennt)') !!}
    {!! Form::text('tags', null, ['class' => 'form-control', 'placeholder' => 'z.B.: Bleach, Bleach Anime']) !!}
</div>
<div class="form-group">
    {!! Form::label('studio', 'Studio(s): (mit Komma getrennt)') !!}
    {!! Form::text('studio', null, ['class' => 'form-control', 'placeholder' => 'z.B.: Studio Pierrot']) !!}
</div>
<div class="form-group">
    {!! Form::label('mal_id', 'MyAnimeList ID:') !!}
    {!! Form::text('mal_id', null, ['class' => 'form-control', 'placeholder' => 'z.B.: 269']) !!}
</div>
<div class="form-group">
    {!! Form::label('op_yt_id', 'YouTube Video ID:') !!}
    {!! Form::text('op_yt_id', null, ['class' => 'form-control', 'placeholder' => 'z.B.: _ty-Nqm4Pdc']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>