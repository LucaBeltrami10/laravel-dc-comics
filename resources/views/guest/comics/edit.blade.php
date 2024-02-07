@extends('layout.app')

@section('main-section')

<form class="w-50 mx-auto" action="{{ route('guest.update', $comic->id) }}" method="POST">
    @csrf

    @method('PUT')

    <div class="mb-3">
      <label for="text" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
    </div>
    
      <div class="mb-3">
        <label for="text" class="form-label">Link a copertina</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" max="999999.99" value="{{ $comic->price }}">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Data Uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Descrizione</label>
        <input type="textarea" class="form-control" id="description" name="description" value="{{ $comic->description }}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection