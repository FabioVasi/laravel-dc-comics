@extends('layouts.admin')



@section('content')

    <div class="container">

    <h1>Edit Comic {{$comic->id}}</h1>

    @include('partials.errors')

        <form class="border-0" action="{{route('comics.update', $comic)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-laber">Title</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" maxlength="150" placeholder="Type the Title here" value="{{old('name', $dccomic->title)}}" required>
                <small id="nameHelper" class="form-text text-muted">Type the Title here</small>
                @error('name')
                    <div class="text-danger">{{message}}</div>
                @enderror 
            </div>

            <div class="mb-3">
                <label for="price" class="form-laber">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="99.99" value="{{old('price', $dccomic->price)}}" maxlength="30" required>
                <small id="priceHelper" class="form-text text-muted">Type the Price here</small>
                @error('price')
                    <div class="text-danger">{{message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-laber">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" maxlength="200" placeholder="type the series here" value="{{old('series', $dccomic->series)}}" required>
                <small id="seriesHelper" class="form-text text-muted">Type the Series here</small>
                @error('series')
                    <div class="text-danger">{{message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div>
                    <img width="200" src="{{asset('storage/' . $comic->thumb)}}" alt="">
                </div>
                <label for="thumb" class="form-laber">Choose a Thumb</label>
                <input type="file" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"  placeholder="" value="{{$dccomic->thumb}}">
                <small id="thumbHelper" class="form-text">Choose an Image to upload for the Product</small>
                @error('thumb')
                    <div class="text-danger">{{message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>

@endsection