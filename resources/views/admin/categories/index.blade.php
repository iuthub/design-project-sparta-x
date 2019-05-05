@extends('admin.layout')
@section('content')
    <div class="container">
        <a class="btn btn-success my-3 px-3" href="{{route('categories.create')}}">Add</a>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category title</th>
                <th scope="col"></th>
                {{--<th scope="col"></th>--}}
                {{--<th scope="col"></th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$category->title}}</td>
                    <td align="right">
                        <form action="{{route('categories.destroy', $category->id)}}"method="post">
                        <a href="" class="btn btn-info">view</a>
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">edit</a>

                            <input type="hidden" name="_method" value="delete">
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
