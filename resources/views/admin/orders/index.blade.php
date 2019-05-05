@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-4">
        <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders Details</h1>
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
                <th>Ordered Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$order->contact_name}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone_number}}</td>
                    <td>{{$order->product->title}}</td>
                    <td align="center">{{$order->quantity}}</td>

                    <td>{{$order->created_at}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <form action="{{route('orders.destroy', $order->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('orders.edit', $order->id)}}" class="btn btn-info">Edit</a>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection
