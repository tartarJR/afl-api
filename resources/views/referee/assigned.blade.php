@extends('layouts.app')

@section('content')

  <div class="d-flex justify-content-between bd-highlight">
      <div class="p-2 bd-highlight"><h5>{{ $game->game_string }}</h5></div>
  </div>

  <div class="d-flex justify-content-between bd-highlight">
      <div class="p-2 bd-highlight"><h5>Hakemler</h5></div>
  </div>

    @include('layouts.success-message')

    <div class="row">
        <div class="col-lg-12">
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <th scope="col">Hakem Tipi</th>
                      <th scope="col">Hakem</th>
                      <!-- TODO removing and adding refs from a game links/buttons-->
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($refereeTypes as $index => $refereeType)
                      <tr>
                          <td>{{ $refereeType->type }}</td>
                          <td>
                              @php
                                if (isset($game->referees()->get()->toArray()[$index])){
                                  $refsOfGameArr = $game->referees()->get()->toArray()[$index];
                                }
                              @endphp

                              @if (in_array($refereeType->type, $refsOfGameArr))
                                {{ $refsOfGameArr['first_name'] . ' ' . $refsOfGameArr['last_name']}}
                              @else
                                Henüz atanmadı.
                              @endif
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
        </div>
    </div>

@endsection
