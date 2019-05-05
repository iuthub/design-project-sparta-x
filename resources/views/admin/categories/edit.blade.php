@extends('admin.layout')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="container mt-4">
        <form action="{{route('categories.store')}}" class="form-group" method="post">
            @csrf
            <label for="category">Category title</label>
            <input class="form-control" type="text" name="title" id="category" placeholder="Enter new title" value="{{$category->title}}">
            <button class="btn btn-success float-right mt-2" type="submit">Change</button>
        </form>
    </div>
</main>
@endsection
