@extends('admin.layout')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Food Details </h1>
        </div>
        <form method="post" action="{{route('products.store')}}" enctype='multipart/form-data'>
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="food-name">Food name</label>
                    <input type="text" class="form-control" id="food-name" placeholder="Enter Food name"  required name="title">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Food Category</label>
                    <select class="custom-select" name="category_id">
                        <option selected>Food Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="food-cost">Cost</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="food-cost">sum</span>
                        </div>
                        <input name="price" type="number" class="form-control" id="validationDefaultUsername" placeholder="0.0" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Image</label>
                    <div class="custom-file  mb-3">
                        <input type="file" class="custom-file-input" id="food-image" multiple name="images[]">
                        <label class="custom-file-label" for="food-image">Upload images</label>
                    </div>
                </div>
            </div>
            <div class="form-row">

                <div class="col-md-12">
                    <div class="form-group">

                        <textarea class="form-control rounded-0" id="description" rows="7" placeholder="Food Description" name="description"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </main>
@endsection
