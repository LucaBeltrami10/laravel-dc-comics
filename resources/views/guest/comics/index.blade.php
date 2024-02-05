@extends('layout.app')

@section('main-section')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <a href="{{ route('guest.comics.show'), $comic['id'] }}">
                    <div class="card mx-2" style="width: 18rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <ul>
                            <li class="list-group-item mb-1">{{ $comic['title'] }}</li>
                            <li class="list-group-item mb-1">{{ $comic['description'] }}</li>
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
