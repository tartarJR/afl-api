@extends('layouts.app')

@section('content')

    <h5>Sezon Güncelleme Formu</h5>

    <div class="mt-3">

        {!! Form::model($season, ['method'=>'patch', 'route' => ['seasons.update', $season->id]]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="season-select">Sezon</label>
                <select id="season-select" class="form-control" name="season">
                    <option value="">Lütfen sezon seçiniz</option>
                    @for($year = 2010; $year<2026; $year++)
                        @php
                            $yearString = strval($year) . '/' .strval($year + 1);
                        @endphp
                        <option value="{{ $yearString }}" {{ $yearString == $season->season ? 'selected="selected"' : '' }}>
                            {{ $yearString }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sezon Güncelle</button>
        </div>

        {!! Form::close() !!}

    </div>

    @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

@endsection