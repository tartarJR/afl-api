@extends('layouts.app')

@section('content')

    <h5>Maç Oluşturma Formu</h5>

    <div class="mt-3">
        <form method="post" action="{{ route('games.store') }}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="season-select">Sezon</label>
                    <select class="form-control" id="season-select" name="season">
                        <option value="0">Tüm Sezonlar</option>
                        @foreach ($seasons as $season)
                            <option value="{{ $season->id }}" {{ old('season') == $season->id ? 'selected' : '' }}>{{ $season->season }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="week-select">Hafta</label>
                    <select class="form-control" id="week-select" name="week">
                        <option value="0">Tüm Haftalar</option>
                        @foreach ($weeks as $week)
                            <option value="{{ $week->id }}" {{ old('week') == $week->id ? 'selected' : '' }}>{{ $week->week }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Ev Sahibi Takım</label>
                    <select class="form-control" id="week-select" name="home-team">
                        <option value="0">--Lütfen Takım Seçin--</option>
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}" {{ old('home-team') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Misafir Takım</label>
                    <select class="form-control" id="week-select" name="away-team">
                        <option value="0">--Lütfen Takım Seçin--</option>
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}" {{ old('away-team') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Tarih</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Yer</label>
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Ev Sahibi Takım Skoru</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Misafir Takım Skoru</label>
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Maç Özeti</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Maç Oynandı mı?
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Maçı Oluştur</button>
        </form>
    </div>

@endsection