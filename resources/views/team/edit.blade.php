@extends('layouts.app')

@section('content')

    <h5>Takım Güncelleme Formu</h5>

    <div class="mt-3">

        {!! Form::model($team, ['method'=>'patch', 'route' => ['games.update', $team->id], 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="team-name">Takım Adı</label>
                {!! Form::text('name', null, ['id' => 'team-name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="team-logo">Takım Logosu</label>
                {!! Form::file('img_path', null, ['id' => 'team-logo', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="team-primary-color">Birincil Renk</label>
                {!! Form::text('primary_color_code', null, ['id' => 'team-primary-color', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="team-secondary-color">İkincil Renk</label>
                {!! Form::text('secondary_color_code', null, ['id' => 'team-secondary-color', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label for="team-alternative-color">Alternatif Renk</label>
                {!! Form::text('alternative_color_code', null, ['id' => 'team-alternative-color', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="team-info">Takım Genel Bilgileri</label>
                {!! Form::textarea('info', null, ['id' => 'team-info', 'class' => 'form-control', 'rows' => '5']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Takım Oluştur</button>
        </div>
        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection