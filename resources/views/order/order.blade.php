@extends('layouts.app')

@section('content')

<section id='order-form'>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 mx-auto">
                <div class="text-center mb-6 ">
                    <img src="assets/images/brand/logo.png" class="h-6" alt="" />
                </div>
                <form class="card" method="post" action="{{route('makeOrder')}}">
                    @csrf
                    <input name='product_id' type="hidden" value="{{$product_id}}"/>
                    <div class="card-body p-6">
                        <div class="card-title text-center">Order Details</div>
                        <div class="form-group">
                            <label class="form-label">Contact name </label>
                            <input name='contact_name' type="text" class="form-control" placeholder="Contact name" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Valid phone number to contact" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address line</label>
                            <input name='address' type="text" class="form-control" placeholder="Address to deliver" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Quantity</label>
                            <input name='quantity' type="number" min="1" max="20" class="form-control" placeholder="Number of portions" />
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block form-button">Order now </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
