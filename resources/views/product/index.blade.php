@extends('layout')
@section('content')
    <div class="container">
        <h3 class="text-center mt-5"> Product Management</h3>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 ">
                <div class="form-area bg-info rounded">
                    <form action="{{ route('product.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Product Name</label>
                                <input type="text" name="productname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Category Name</label>
                                <select name="cat_id" id="cat_id" class="form-control">
                                    @foreach ($categories as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Brand Name</label>
                                <select name="brand_id" id="brand_id" class="form-control">
                                    @foreach ($brands as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <input type="submit" class="btn btn-primary" value="save">
                    </div>
                </div>
                </form>
            </div>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $product->productname }}</td>
                            <td scope="col">{{ $product->category->catname }}</td>
                            <td scope="col">{{ $product->brand->brandname }}</td>
                            <td scope="col">{{ $product->price }}</td>

                            <td scope="col">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('product.edit', $product->id) }}">
                                        <button class="btn btn-primary btn-sm">edit</button>
                                    </a> &nbsp;
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete?')">delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection();
@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
        }
    </style>
@endpush()
