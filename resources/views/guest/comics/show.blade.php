
@extends('layout.app')

@section('main-section')
<div class="container">
    <div class="row">
            <div class="col-6">
                <div class="card mx-2 text-center mx-auto" style="width: 18rem;">
                    <img src="{{ $comics['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="btn btn-primary">Modifica</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mx-2 text-center mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <ul class="p-0">
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Titolo:</p>
                                    <p class="m-0">{{ $comics['title'] }}</p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Series:</p>
                                    <p class="m-0">{{ $comics['series']  }}</p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Series:</p>
                                    <p class="m-0">{{ $comics['description']  }}</p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <p class="m-0 fw-bold">Prezzo:</p>
                                    <p class="m-0">{{ $comics['price'] }}</p>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-primary" href="">Modifica</a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection