@extends('layouts.app')

@section('content')

    <h5>Haberler</h5>

    @include('layouts.success-message')

    <div class="row">
        <div class="col-lg-12">
            @if (count($reports) === 0)
                <div class="alert alert-info">
                    <strong>Upps!</strong> Henüz bir haber eklenmedi.
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Haber Başlığı</th>
                        <th scope="col">Detaylar</th>
                        <th scope="col">Haberi Güncelle</th>
                        <th scope="col">Haberi Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{ $report->title }}</td>
                            <td>{{ link_to_route('reports.show', 'Detayları Gör', $report->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>{{ link_to_route('reports.edit', 'Güncelle', $report->id, ['class' => 'btn btn-primary']) }}</td>
                            <td>
                                <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
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
        <div class="p-2 bd-highlight"><a href="{{ route('reports.create') }}"><p>Yeni bir haber yarat</p></a></div>
        <div class="p-2 bd-highlight">{{ $reports->links() }}</div>
    </div>

@endsection
