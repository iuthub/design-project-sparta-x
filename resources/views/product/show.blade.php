@extends('layouts.app')

@section('content')

    <section class="single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="img-box">
                        <img class="single-big" src="assets/img/gallery/gallery6.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12">
                    <div class="description-box">
                        <div class="desc-title">
                            <h3>{{$product->title}}</h3>
                        </div>
                        <div class="desc-text">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="price">
                            <ul>
                                <li><i class="fa fa-dollar-sign"></i>
                                    <p>Price: {{$product->price}}</p></li>
                                <li><i class="fa fa-list-ul"></i>
                                    <p>Category: {{$product->category->title}}</p></li>
                            </ul>
                        </div>
                        <div>
                            <a href="{{route('details', ['product_id' => $product->id])}}" class="order-button">Order
                                Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="gallery">
                        <div class="single-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
                            <div class="single-img">
                                <img class="single-small" src="assets/img/gallery/gallery1.png" alt=""/>
                            </div>
                            <div class="single-img">
                                <img class="single-small" src="assets/img/gallery/gallery2.png" alt=""/>
                            </div>
                            <div class="single-img">
                                <img class="single-small" src="assets/img/gallery/gallery3.png" alt=""/>
                            </div>
                            <div class="single-img">
                                <img class="single-small" src="assets/img/gallery/gallery4.png" alt=""/>
                            </div>
                            <div class="single-img">
                                <img class="single-small" src="assets/img/gallery/gallery5.png" alt=""/>
                            </div>
                            <div class="single-img">
                                <img class="single-small" src="assets/img/gallery/gallery6.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection