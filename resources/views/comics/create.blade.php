@extends('layouts.app')


@section('content')
<div>
    <h1>Crea un nuovo comics</h1>
</div class="p-3">
<form action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci titolo">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Inserisci Url immagine</label>
        <input type="image" class="form-control" id="image" placeholder="Inserisci titolo">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <a href="{{ route('comics.store') }}" class="btn btn-primary">Invia comics</a>

</form>

@endsection