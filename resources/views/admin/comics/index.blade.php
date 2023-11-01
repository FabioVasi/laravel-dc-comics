@extends('layouts.admin')



@section('content')

    <div class="container">
        
        <h1>Comics</h1>

        <a href="{{route('comics.create')}}">Add Comic</a>

        <div class="table-responsive-sm">

            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                    <tr class="">
                        <td scope="row" >{{$comic->id}}</td>
                        <td><img width="100" src="{{('storage/' . $dcComic->thumb)}}" alt=""></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">View</a>
                            /Edit/Delete
                        </td>
                    </tr>
                    @empty
                    <p>Nothing to show</p>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>

@endsection