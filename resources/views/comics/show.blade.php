@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
   <div class="col-4 gy-3">
      <div class="card h-100" style="width: 18rem;">
          <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">{{$comic->description}}</p>
            <p class="card-text">{{$comic->price}}</p>
            <p class="card-text">{{$comic->series}}</p>
            <p class="card-text">{{$comic->sale_date}}</p>
            <p class="card-text">{{$comic->type}}</p>


          </div>
        </div>
  </div>

   </div>
  </div>
@endsection