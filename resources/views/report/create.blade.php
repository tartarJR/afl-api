@extends('layouts.app')

@section('content')

    <h5>Haber Oluşturma Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'reports.store', 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Haber Başlığı</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="content">Haber İçeriği</label>
                <textarea class="form-control" id="content" rows="7" name="content">{{ old('content') }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="img-path">Haber İmaj Seçimi</label>
                <input type="file" class="form-control" id="img-path" name="img_path">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="related-teams">Haber İle İlişkili Takımlar</label>
                {!! Form::select('related_teams[]', $teams, null,['id' => 'related-teams', 'placeholder' => 'Lütfen en fazla 2 takım seçiniz', 'multiple'=>'multiple']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Haber Oluştur</button>
        </div>

        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

    <script src="{{ asset('js/report/multiselect-selectize.js') }}" defer></script>
    <link href="{{ asset('css/libs/selectize.default.css') }}" rel="stylesheet">

@endsection
