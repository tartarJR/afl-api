@extends('layouts.app')

@section('content')



    @include('layouts.success-message')

    <div class="row">
        <div class="col-lg-12">
            @if (count($coaches) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Aranılan kriterlerde bir koç bulunamadı.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">İsim</th>
                        <th scope="col">Yaş</th>
                        <th scope="col">Tecrübe</th>
                        <th scope="col">Takım</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($coaches as $coach)
                        <tr>
                            <td>{{ $coach->full_name }}</td>
                            <td>{{ $coach->age }}</td>
                            <td>{{ $coach->experience }}</td>
                            <td>{{ $coach->team->name }}</td>
                            <td>{{ link_to_route('coaches.edit', 'Güncelle', $coach->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('coaches.destroy', $coach->id) }}">
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
        <div class="p-2 bd-highlight"><a href="{{ route('coaches.create') }}"><p>Yeni bir koç yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $coaches->links() }}</div>
    </div>

@endsection
