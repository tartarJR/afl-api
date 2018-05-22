@extends('layouts.app')

@section('content')

    <h5>Maç Oluşturma Formu</h5>

    <div class="mt-3">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Sezon</label>
                    <select class="form-control" id="" name=""></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Hafta</label>
                    <select class="form-control" id="" name=""></select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Ev Sahibi Takım</label>
                    <select class="form-control" id="" name=""></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Misafir Takım</label>
                    <select class="form-control" id="" name=""></select>
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