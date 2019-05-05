@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
        <div class="card mt-5">
            <div class="container">
                <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Change Image</h1>
                <hr class="mt-2 mb-5">
                <div class="row text-center text-lg-left">
                        <div class="col-lg-3 col-md-4 col-6">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/{{$product_image->title}}" alt="{{$product_image->alt}}">

                                </a>
                        </div>
                    {{--<div class="col-md-4">--}}
                        <form action="{{route('product.image_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_mehtod" value="put">
                            <input type="hidden" name="id" value="{{$product_image->id}}">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="">Image</label>
                                    <div class="custom-file  mb-3">
                                        <input type="file" class="custom-file-input" id="food-image"  name="image">
                                        <label class="custom-file-label" for="food-image">Upload image</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-2 mt-4">
                                    <button class="btn btn-info">Change</button>
                                </div>
                            </div>
                        </form>


                    {{--</div>--}}



                </div>
            </div>
        </div>
        <main>
            @endsection
            on
