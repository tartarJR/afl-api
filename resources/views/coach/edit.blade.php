@extends('layouts.app')

@section('content')

    <h5>Koç Güncelleme Formu</h5>

    <div class="mt-3">

        {!! Form::model($coach, ['method'=>'patch', 'route' => ['coaches.update', $coach->id], 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first-name">Adı</label>
                {!! Form::text('first_name', null, ['id' => 'first-name', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                <label for="last-name">Soyadı</label>
                {!! Form::text('last_name', null, ['id' => 'last-name', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="birth-date">Doğum Tarihi</label>
              {!! Form::text('birth_date', null, ['id' => 'birth-date', 'class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
              <label for="experience">Tecrübe</label>
              {!! Form::text('experience', null, ['id' => 'experience', 'class' => 'form-control']) !!}
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
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <img src="{{ asset($coach->coach_img) }}" height="300px" width="300px">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::file('img_path', null, ['id' => 'img-path', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Koç Güncelle</button>
        </div>
        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection
