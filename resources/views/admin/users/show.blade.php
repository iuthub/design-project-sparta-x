@extends('admin.layout')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Details</h1>
    </div>
    <div class="container">
        <div class="jumbotron">
            <h2>{{$user->name}}</h2>
            <p><i class="fas fa-at"></i> {{$user->email}}</p>
            <p><i class="fas fa-history"></i> Registered Date: {{$user->created_at}}</p>
        </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Orders</h1>
    </div>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Contact Name</th>
            <th>Address</th>
            <th>Phone number</th>
            <th>Food</th>
            <th>Quantity</th>
            <th>Food Category</th>
            <th>Ordered Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user->orders as $order)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$order->contact_name}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->phone_number}}</td>
            <td>{{$order->product->title}}</td>
            <td align="center">{{$order->quantity}}</td>
            <td>{{$order->product->category->title}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->status}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</main>
@endsection
