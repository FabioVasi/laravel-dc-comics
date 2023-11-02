@extends('layouts.admin')



@section('content')

    <div class="container">
        
        <h2>{{$dccomic->id}}</h2>
        
        <div class="row">
            <div class="col-4" >{{$dccomic->id}}
                <div class="card">
                    <img class="card-img-top" width="100" src="{{asset('storage/' . $dccomic->thumb)}}" alt="">
                    <div class="card-body">
                        <h3>{{$dccomic->title}}</h3>
                        <h2>{{$dccomic->price}}</h2>
                        <h2>{{$dccomic->series}}</h2>
                        <a href="#" class="btn btn-primary">View</a>Edit/Delete
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection