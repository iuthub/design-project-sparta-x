@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add User </h1>
        </div>
        <form method="post" action="{{route('users.store')}}" enctype='multipart/form-data'>
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter User name" required
                           name="name">
                </div>
                <div class="col-md-12 mb-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter User email" required
                           name="email">
                </div>
                <div class="col-md-12 mb-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter User password" required
                           name="password">
                </div>
                <div class="col-md-12 mb-6 mt-3">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>
    </main>
@endsection
