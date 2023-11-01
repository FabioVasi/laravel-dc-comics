@extends('layouts.admin')



@section('content')

    <div class="container">

        <form action="{{route('comics.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-laber">Title</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper">
                <small id="nameHelper" class="form-text text-muted">Type the Title here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-laber">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper">
                <small id="priceHelper" class="form-text text-muted">Type the Price here</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-laber">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper">
                <small id="seriesHelper" class="form-text text-muted">Type the Series here</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-laber">Choose a Thumb</label>
                <input type="file" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper">
                <small id="thumbHelper" class="form-text">Choose an Image to upload for the Product</small>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>

@endsection