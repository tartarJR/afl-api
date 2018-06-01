@extends('layouts.app')

@section('content')

    <h5>Hakem Güncelleme Formu</h5>

    <div class="mt-3">

        {!! Form::model($referee, ['method'=>'patch', 'route' => ['referees.update', $referee->id]]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first-name">Adı</label>
                {!! Form::text('first_name', null, ['id' => 'first-name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="last-name">Soy Adı</label>
                {!! Form::text('last_name', null, ['id' => 'last-name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="birth-date">Doğum Tarihi</label>
                {!! Form::text('birth_date', null, ['id' => 'birth-date', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="experience">Tecrübe</label>
                {!! Form::text('experience', null, ['id' => 'experience', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Hakem Güncelle</button>
        </div>
        
        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection
