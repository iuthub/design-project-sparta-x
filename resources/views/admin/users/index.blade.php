@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container">
            <div class="row">


                <a class="btn btn-success my-3 px-3" href="{{route('users.create')}}">Add</a>

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Registered Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as  $user)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td align="right">
                                <form action="{{route('users.destroy', $user->id)}}"method="post">
                                    <a href="{{route('users.show', $user->id)}}" class="btn btn-info">view</a>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">edit</a>

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
        </div>
        <main>
@endsection
