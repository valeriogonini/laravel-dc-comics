@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div>
      <h1>Crea un nuovo comics</h1>
  </div class="p-3">
  <form action="{{route('comics.store')}}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci titolo">
        </div>
        <div class="mb-3">
          <label for="thumb" class="form-label">Inserisci Url immagine</label>
          <input type="text" class="form-control" name="thumb" id="thumb" placeholder="http://..">
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci prezzo">
        </div>
        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci series">
        </div>
        <div class="mb-3">
          <label for="sale_date" class="form-label">Data</label>
          <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci Data">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci tipologia">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <button class="btn btn-primary">Invia comics</button>
  
  </form>
  </div>
</div>


@endsection