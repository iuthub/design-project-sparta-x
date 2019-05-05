@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
        <div class="card mt-5">
            <h5 class="card-header">
                Product name : {{$product->title}}
            </h5>
            <div class="card-body">
                <h5 class="card-title">Category: {{$product->category->title}}</h5>
                <h5 class="card-title">Price: {{$product->price}} sum</h5>
                <hr>
                <p class="card-text">{{$product->description}}</p>

            </div>
            <div class="row">

                <div class="col-lg-12 ml-4 mt-3">
                    <h2 class="font-weight-light ">{{$product->title}} Images</h2>
                </div>

                <div class="col-lg-8 ml-4">
                    <form action="{{route('product.image_add')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <div class="col-7">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="file" class="custom-file-input " id="food-image" multiple name="images[]">
                                <label class="custom-file-label" for="food-image">Upload images</label>
                            </div>
                            <div class="col">
                                <button class="btn btn-success">Submmit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">

                <hr class="mt-2 mb-5">
                <div class="row text-center text-lg-left">
                    @foreach($product->images as $image)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div style="height:70%; ">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/{{$image->title}}" alt="{{$image->alt}}"
                                         style="max-height: 180px;">

                                </a>
                            </div>
                            <div style="height: 30%;" class="mt-3">
                                <form action="{{route('product.image_delete')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="id" , value="{{$image->id}}">
                                    <a href="{{route('product.image_edit' ,$image->id)}}"
                                       class="btn btn-warning">Edit</a>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>


                    @endforeach
                </div>
            </div>
        </div>
        <main>
@endsection
