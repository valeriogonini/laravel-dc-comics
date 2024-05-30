@extends('layouts.app')


@section('content')
<div>
    <h1>Modifica un comics : {{$comic->title}}</h1>
</div class="p-3">
<form action="{{route('comics.update', $comic)}}" method="POST">
    @method('PUT')

    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci titolo" value="{{$comic->title}}">
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Inserisci Url immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="http://.." value="{{$comic->thumb}}">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci prezzo" value="{{$comic->price}}">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci series" value="{{$comic->series}}">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data</label>
        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Inserisci Data" value="{{$comic->sale_date}}">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" name="type" class="form-control" id="type" placeholder="Inserisci tipologia" value="{{$comic->type}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" rows="3" value="{{$comic->descripion}}"></textarea>
      </div>
      <button class="btn btn-primary">Invia comics</button>

</form>

@endsection