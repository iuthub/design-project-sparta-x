@extends('layouts.app')

@section('content')
    <div class="orders">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2 mt-3">
                    <h2>My orders</h2>
                    @foreach($orders as $order)
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="" src="http://via.placeholder.com/300x180" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">{{$order->product->title}}</h4>
                                    <p class="card-text">{{$order->product->description}}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">{{ date('Y/m/d', strtotime($order->created_at))}}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
