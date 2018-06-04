@extends('layouts.app')

@section('content')

    <h5>Hakem Atama Formu</h5>

    <div class="mt-3">

        {!! Form::open(['route' => 'referees.assign', 'id' => 'assign-referee-form']) !!}

        {{ csrf_field() }}

        <div>
            <h3>Maç Seçimi</h3>
            <section>
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="season-text">Sezon: {{ $latestSeason->season }}</label>
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="game-select">Maç</label>
                      {!! Form::select('game', $games, null,['id' => 'game-select', 'placeholder' => 'Lütfen seçiniz']) !!}
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    **
                      <p>Maç seçimi için listeli giriş kutusunu tıklayıp açarak kaydırma yoluyla istediğiniz maçı seçebilir veya arama kısmına istediğiniz maç ile ilgili bir anahtar sözcük yazarak maçı bulup sonrasında seçebilirsiniz.</p>
                  </div>
              </div>
            </section>
            <h3>Hakem Seçimi</h3>
            <section>
                <div class="form-row">
                @foreach($refereeTypes as $refereeType)
                        <div class="form-group col-md-4">
                            <label for="{{ $refereeType->input_name . '-select' }}">{{ $refereeType->type }}</label>
                            <select id="{{ $refereeType->input_name }}" class="ref-select" name="{{ $refereeType->input_name }}">
                                <option value="">Lütfen seçiniz</option>
                                @foreach($referees as $referee)
                                  <option value="{{$referee->id}}">{{$referee->full_name}}</option>
                                @endforeach
                              </select>

                        </div>
                @endforeach
                </div>
            </section>
            <h3>Hakem Atamalarını Tamamla</h3>
            <section>
                <p>Hakem atamalarının doğruluğuna eminseniz "Atamaları Tamamla" butonuna tıklayarak işleminizi sonlandırabilirsiniz.</p>
            </section>
        </div>

        {!! Form::close() !!}

    </div>

    @include('layouts.validation-errors')

    <script src="{{ asset('js/referee/assign.js') }}" defer></script>
    <link href="{{ asset('css/libs/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs/selectize.default.css') }}" rel="stylesheet">
@endsection
