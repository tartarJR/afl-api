@extends('layouts.app')

@section('content')

    <h5>Takım Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'teams.store', 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="team-name">Takım Adı</label>
                <input type="text" class="form-control" id="team-name" name="name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="team-logo">Takım Logosu</label>
                <input type="file" class="form-control" id="team-logo" name="img_path">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="team-primary-color">Birincil Renk</label>
                <input type="text" class="form-control" id="team-primary-color" name="primary_color_code"
                       value="{{ old('primary_color_code') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="team-secondary-color">İkincil Renk</label>
                <input type="text" class="form-control" id="team-secondary-color" name="secondary_color_code"
                       value="{{ old('secondary_color_code') }}">
            </div>
            <div class="form-group col-md-4">
                <label for="team-alternative-color">Alternatif Renk</label>
                <input type="text" class="form-control" id="team-alternative-color" name="alternative_color_code"
                       value="{{ old('alternative_color_code') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="team-info">Takım Genel Bilgileri</label>
                <textarea class="form-control" id="team-info" rows="5"
                          name="info">{{ old('info') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Takım Oluştur</button>
        </div>
        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection