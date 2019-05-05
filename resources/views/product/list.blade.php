@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row food-set">
            @foreach($products as $product)
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="card" style="width: 20rem;">
                        <a href="{{route('product.show', ['product_id' => $product->id])}}">
                            <img class="card-img-top"
                                 src="assets/img/IMAGE 2019-05-05 14:39:09.jpg"
                                 alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="{{route('product.show', ['product_id' => $product->id])}}">
                                <h5 class="card-title">{{$product->title}}</h5>
                                <p class="card-text">{{$product->description}}</p>
                                <span>From {{$product->price}}</span>
                            </a>
                            <a href="{{route('details', ['product_id' => $product->id])}}" class="card-link"><i
                                        class="fas fa-shopping-cart"></i>Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!--
        <div class="pagination">
            <a href="" class="btn  btn-circle"><i class="fa fa-arrow-left"></i></a>
            <a href="" class="btn  btn-circle"><i class="fa fa-arrow-right"></i></a>
        </div> -->

    </div>
@endsection
