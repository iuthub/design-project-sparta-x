@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
       <div class="container">
           <div class="row">


           <a class="btn btn-success my-3 px-3" href="{{route('products.create')}}">Add</a>

           <table class="table">
               <thead class="thead-light">
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">Product name</th>
                   <th scope="col">Product category</th>
                   <th scope="col">Price</th>
                   <th scope="col"></th>
               </tr>
               </thead>
               <tbody>
               @foreach($products as  $product)
                   <tr>
                       <th scope="row">{{$loop->index+1}}</th>
                       <td>{{$product->title}}</td>
                       <td>{{$product->category->title}}</td>
                       <td>{{$product->price}} sum</td>
                       <td align="right">
                           <form action="{{route('products.destroy', $product->id)}}"method="post">
                               <a href="" class="btn btn-info">view</a>
                               <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">edit</a>

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
