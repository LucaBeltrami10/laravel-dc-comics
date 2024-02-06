@extends('layout.app')

@section('main-section')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <a href="{{ route('rottaDiProva', $comic['id']) }}">
                    <div class="card mx-2">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <ul>
                            <li class="list-group-item mb-1">{{ $comic['title'] }}</li>
                            <li class="list-group-item mb-1">{{ $comic['series'] }}</li>
                            <li class="list-group-item mb-1">{{ $comic['price'] }}</li>
                        </ul>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
