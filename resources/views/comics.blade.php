@extends('layouts.app')



@section('content')
<section class="products py-5">
    <div class="container">
        <div class="row row-cols-6 g-4">
            @forelse($comics as $comic)
                <div class="col">
                    <div class="card bg-transparent rounded-0 border-danger h-100">
                        <img height="200" class="card-img-top rounded-0" src="{{$comic->thumb}}" alt="">
                        <div class="card-body text-white">
                            <h4>{{$comic->title}}</h4>
                            <a class="btn btn-primary" href="{{route('guests.comics.show', $comic->id)}}">View</a>
                            <p class="pt-2">{{Str::limit($comic->description, 100)}}</p>
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