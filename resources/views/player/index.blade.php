@extends('layouts.app')

@section('content')

    <h5>Oyuncular</h5>

    @include('layouts.success-message')

    <div class="row">
        <div class="col-lg-12">
            @if (count($players) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Aranılan kriterlerde bir oyuncu bulunamadı.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Ad</th>
                        <th scope="col">Uyruk</th>
                        <th scope="col">Takım</th>
                        <th scope="col">Detay</th>
                        <th scope="col">Sil</th>
                        <th scope="col">Güncelle</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td>{{ $player->full_name }}</td>
                            <td>{{ $player->nationality }}</td>
                            <td>{{ $player->team->name }}</td>
                            <td>{{ link_to_route('players.show', 'Detaylar', $player->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>{{ link_to_route('players.edit', 'Güncelle', $player->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('players.destroy', $player->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-primary" type="submit">Sil</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-between bd-highlight mb-3">
        <div class="p-2 bd-highlight"><a href="{{ route('players.create') }}"><p>Yeni bir oyuncu yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $players->links() }}</div>
    </div>

@endsection
