@extends('layouts.app')


@section('content')
    <div class="container">
      <div class="row">
    @foreach ($comics as $comic)
     <div class="col-4 gy-3">
        <div class="card h-100" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <a href="{{route('comics.edit', $comic)}}">Edit</a>

            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Descrizione</a>
            <form action="{{route('comics.destroy', $comic)}}" method="POST">
              @method('DELETE')

              @csrf
              <button class="btn btn-primary">DELETE</button>
            </form>
            </div>
          </div>
    </div>
    @endforeach

     </div>
    </div>
@endsection