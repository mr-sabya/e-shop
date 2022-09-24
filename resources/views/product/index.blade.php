@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Category List</h2>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Old Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->category['name'] }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->old_price }}</td>
                            <td>
                                <a href="{{ route('product.edit', $product->id)}}">Edit</a>
                                
                                <form action="{{ route('product.destroy', $product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger " onclick="return confirm('Do you want to delete this data?')">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
