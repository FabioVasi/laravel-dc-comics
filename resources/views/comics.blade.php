@extends('layouts.app')



@section('content')
<section>
    <div class="container">
        <div class="row">
            @forelse($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{('storage/' . $dcComic->thumb)}}" alt="">
                        <div class="card-body">
                            <h3>{{$comic->title}}</h3>
                            <a class="btn btn-primary" href="{{route('guests.comics.show', $comic->id)}}">View</a>
                            <p>{{$comic->description}}</p>
                            <h5>{{$comic->price}}</h5>
                            <h5>{{$comic->series}}</h5>
                        </div>
                    </div>
                </div>
            @empty
                <p>No Comics To Show</p>
            @endforelse
        </div>
    </div>
</section>
    

@endsection