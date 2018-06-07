@extends('layouts.app')

@section('content')

    <h5>Koç Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'coaches.store', 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first-name">Adı</label>
                <input type="text" class="form-control" id="first-name" name="first_name" value="{{ old('first_name') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="last-name">Soyadı</label>
                <input type="text" class="form-control" id="last-name" name="last_name" value="{{ old('last_name') }}">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="birth-date">Doğum Tarihi</label>
              <input type="text" class="form-control" id="birth-date" name="birth_date" value="{{ old('birth_date') }}">
          </div>
          <div class="form-group col-md-6">
              <label for="experience">Tecrübe</label>
              <input type="text" class="form-control" id="experience" name="experience" value="{{ old('experience') }}">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="team-id">Takım</label>
              {!! Form::select('team_id', $teams, null,['id' => 'team-id', 'class' => 'form-control', 'placeholder' => 'Lütfen takım seçiniz']) !!}
          </div>
          <div class="form-group col-md-6">
              <label for="coach-type-id">Koç Tipi</label>
              {!! Form::select('coach_type_id', $coachTypes, null,['id' => 'coach-type-id', 'class' => 'form-control', 'placeholder' => 'Lütfen koç tipi seçiniz']) !!}
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="img-path">Koç Resmi</label>
                <input type="file" class="form-control" id="img-path" name="img_path">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Koç Oluştur</button>
        </div>
        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection
