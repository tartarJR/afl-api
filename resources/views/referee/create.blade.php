@extends('layouts.app')

@section('content')

    <h5>Hakem Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'referees.store']) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first-name">Adı</label>
                <input type="text" class="form-control" id="first-name" name="first_name"
                       value="{{ old('first_name') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="last-name">Soy Adı</label>
                <input type="text" class="form-control" id="last-name" name="last_name"
                       value="{{ old('last_name') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="birth-date">Doğum Tarihi</label>
                <input type="text" class="form-control" id="birth-date" name="birth_date"
                       value="{{ old('birth_date') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="experience">Tecrübe</label>
                <input type="text" class="form-control" id="experience"
                       name="experience" {{ old('experience') }}>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Hakem Oluştur</button>
        </div>
        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection