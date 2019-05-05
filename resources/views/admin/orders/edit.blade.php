@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-4">
        <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Details</h1>
        </div>
        <form method="post" action="{{route('products.store')}}" enctype='multipart/form-data'>
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="address"  required name="address" value="{{$order->address}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone_number">Phone number</label>
                    <input type="text" class="form-control" id="phone_number" placeholder="phone_number"  required name="phone_number" value="{{$order->phone_number}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" id="quantity" placeholder="quantity"  required name="quantity" value="{{$order->quantity}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="contact_name">Contact name</label>
                    <input type="text" class="form-control" id="contact_name" placeholder="contact_name"  required name="contact_name" value="{{$order->contact_name}}">
                </div>




                <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </main>
@endsection
