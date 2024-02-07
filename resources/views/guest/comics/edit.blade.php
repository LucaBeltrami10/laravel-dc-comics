@extends('layout.app')

@section('main-section')

<form class="w-50 mx-auto" action="" method="">
    @csrf

    <div class="mb-3">
      <label for="text" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Link a copertina</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" max="999999.99">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Data Uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection