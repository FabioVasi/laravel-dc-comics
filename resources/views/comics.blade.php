@extends('layouts.app')



@section('content')

    <section class="banner mt-2"></section>

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
    
    <section class="snippets">

        <div class="container">
            <div class="row row-cols-5 gx-5">
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">DIGITAL COMICS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">DC MERCHANDISE</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">SUBSCRIPTION</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="image" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">COMIC SHOP LOCATOR</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="card bg-transparent border-0 rounded-0 py-5">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="svg" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                            <a class="text-decoration-none text-white ps-1 fs-6" href="#">DC POWER VISA</a>
                        </div>
                    </div>
                </div>
                
            </div>        
        </div>

    </section>

@endsection