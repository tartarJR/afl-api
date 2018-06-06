@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-4" align="" style="display: flex; align-items: center; flex-wrap: wrap;">
            <h5 class="align-middle">Başlık : {{ $report->title }}</h5>
        </div>

    </div>

    <div class="row mt-3">

        <div class="col-sm-2">
            <img src="{{  asset($report->report_img) }}" height="300px" width="300px">
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-sm-12">
            <h5>İçerik</h5>
            <p>
                {{ $report->content }}
            </p>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-3">
            <h5>Haber ile ilgili takımlar</h5>
            <ul class="list-group">
            @foreach ($report->teams as $team)
                <li class="list-group-item">{{ $team->name }}</li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection
