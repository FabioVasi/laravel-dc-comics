@extends('layouts.admin')



@section('content')

    <div class="container">
        
        <h2>{{$dcComic->id}}</h2>
        <tr class="">
            <td scope="row" >{{$dcComic->id}}</td>
            <td><img width="100" src="{{$dcComic->thumb}}" alt=""></td>
            <td>{{$dcComic->title}}</td>
            <td>{{$dcComic->price}}</td>
            <td>{{$dcComic->series}}</td>
            <td>View/Edit/Delete</td>
        </tr>

    </div>

@endsection