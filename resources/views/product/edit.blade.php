@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add new Category</h2>

        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" value="{{ $product->slug }}">
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="details">Details</label>
                            <textarea name="details" id="details" cols="30" rows="10" class="form-control">{{ $product->details }}</textarea>
                        </div>


                        <div class="col-lg-12 mb-3">
                            <label for="short_details">Short Details</label>
                            <textarea name="short_details" id="short_details" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" id="price" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label for="old_price">Old Price</label>
                                    <input type="number" name="old_price" id="old_price" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
@endsection
