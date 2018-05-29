@extends('layouts.app')

@section('content')

    <h5>Sezon Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'seasons.store']) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="season-select">Sezon</label>
                <select id="season-select" class="form-control" name="season">
                    <option value="">Lütfen sezon seçiniz</option>
                    @for($year = 2010; $year<2026; $year++)
                        <option value="{{ strval($year) . '/' .strval($year + 1) }}">{{ strval($year) . '/' .strval($year + 1) }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sezon Oluştur</button>
        </div>

        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

@endsection