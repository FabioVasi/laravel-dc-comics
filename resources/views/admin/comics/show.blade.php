@extends('layouts.admin')



@section('content')

    <div class="container">
        
        <h2>{{$dccomic->id}}</h2>
        <tr class="">
            <td scope="row" >{{$dccomic->id}}</td>
            <td><img width="100" src="{{asset('storage/' . $dccomic->thumb)}}" alt=""></td>
            <td>{{$dccomic->title}}</td>
            <td>{{$dccomic->price}}</td>
            <td>{{$dccomic->series}}</td>
            <td>
                <a href="#" class="btn btn-primary">View</a>
                Edit/Delete
            </td>
        </tr>

    </div>

@endsection