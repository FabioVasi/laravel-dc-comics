@extends('layouts.admin')



@section('content')

    <div class="container">
        
        <h1>Comics</h1>

        @if(session('message'));
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <small>Success</small> {{session('message')}}
        </div>
        @endif

        <a class="btn btn-primary my-3" href="{{route('comics.create')}}">Add Comic</a>

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
                        <td><img width="100" src="{{('storage/' . $comic->thumb)}}" alt=""></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">View</a>
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>
                            <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalId-{{$comic->id}}">
                                Delete
                            </a>
                            
                            <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle-{{$comic->id}}">Modal id: {{$comic->id}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attention! This is a destructive operation that cannot be undone.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                            <!-- Delete form -->
                                            <form action="{{route('lightsabers.destroy', $comic->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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