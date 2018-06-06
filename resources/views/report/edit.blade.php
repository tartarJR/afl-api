@extends('layouts.app')

@section('content')

    <h5>Haber Güncelleme Formu</h5>

    <div class="mt-3">

        {!! Form::model($report, ['method'=>'patch', 'route' => ['reports.update', $report->id], 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Haber Başlığı</label>
                {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="content">Haber İçeriği</label>
                {!! Form::textarea('content', null, ['id' => 'content', 'class' => 'form-control', 'rows' => '7']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="img-path">Haber İmaj Güncelleme</label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <img src="{{  asset($report->report_img) }}" height="300px" width="300px">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {!! Form::file('img_path', null, ['id' => 'img-path', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="related-teams">Haber İle İlişkili Takımlar</label>
                {!! Form::select('related_teams[]', $teams, $report->teams,['id' => 'related-teams', 'placeholder' => 'Lütfen en fazla 2 takım seçiniz', 'multiple'=>'multiple']) !!}
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Haberi Güncelle</button>
        </div>

        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

    <script src="{{ asset('js/report/create.js') }}" defer></script>
    <link href="{{ asset('css/libs/selectize.default.css') }}" rel="stylesheet">

@endsection
