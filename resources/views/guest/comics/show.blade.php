
@extends('layout.app')

@section('main-section')
<div class="container">
    <div class="row">
            <div class="col-12">
                <div class="card mx-2" style="width: 18rem;">
                    <img src="{{ $comics['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <ul>
                        <li class="list-group-item mb-1">{{ $comics['title'] }}</li>
                        <li class="list-group-item mb-1">{{ $comics['description'] }}</li>
                        <li class="list-group-item mb-1">{{ $comics['series'] }}</li>
                        <li class="list-group-item mb-1">{{ $comics['price'] }}</li>
                      </ul>
                    </div>
                  </div>
            </div>
    </div>
</div>
@endsection