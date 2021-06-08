@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row ">
      @foreach($songs as $song)
        <div class="col-sm-4 my-1">
          <div class="card">
            <div class=" ">
              <h5 class="card-title">{{$song->name}}</h5>
              <p class="card-text">{{ $song->name }}</p>

              <form action="/songs/{{$song->id}}" method="song">
                @method('DELETE')
                @csrf

                <a class="btn btn-primary mx-1 " href="/songs/{{$song->id}}">Show</a>

                <a class="btn btn-success mx-1" href="/songs/{{$song->id}}/edit">Edit</a>
                <button type="submit" title="delete" class="btn btn-danger mx-1" >Delete</button>

               </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
