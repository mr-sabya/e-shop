@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add new Category</h2>

        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('category.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control">
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
