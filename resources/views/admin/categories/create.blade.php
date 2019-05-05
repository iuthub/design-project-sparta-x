@extends('admin.layout')
@section('content')
    <div class="container mt-4">
        <form action="{{route('categories.store')}}" class="form-group" method="post">
            @csrf
            <label for="category">Category title</label>
            <input class="form-control" type="text" name="title" id="category" placeholder="Enter new title">
            <button class="btn btn-success float-right mt-2" type="submit">Add</button>
        </form>
    </div>
@endsection
