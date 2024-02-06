@extends('layout.app')

@section('main-section')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <a href="{{ route('guest.show', $comic['id']) }}">
                    <div class="card mx-2">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <ul>
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Titolo:</p>
                                    <p class="m-0">{{ $comic['title'] }}</p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Series:</p>
                                    <p class="m-0">{{ $comic['series']  }}</p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Prezzo:</p>
                                    <p class="m-0">{{ $comic['price'] }}</p>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
