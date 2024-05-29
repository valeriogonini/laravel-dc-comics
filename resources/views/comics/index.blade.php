@extends('layouts.app')


@section('content')
<div>
  <a href="{{ route('comics.create') }}" class="btn btn-primary">Inserisci nuovo comics</a>

</div>
    <div class="container">
      <div class="row">
    @foreach ($comics as $comic)
     <div class="col-4 gy-3">
        <div class="card h-100" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>

            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Descrizione</a>
            </div>
          </div>
    </div>
    @endforeach

     </div>
    </div>
@endsection