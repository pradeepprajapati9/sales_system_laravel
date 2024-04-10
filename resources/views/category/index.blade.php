@extends('layout')
@section('content')
    <div class="container">
        <h3 class="text-center mt-5"> Category Management</h3>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 ">
                <div class="form-area bg-info rounded">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Category Name</label>
                                <input type="text" name="catname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option selected>Select menu</option>
                                    <option value="1">True</option>
                                    <option value="2">False</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td scope="col">{{ ++$key }}</td>
                                <td scope="col">{{ $category->catname }}</td>
                                <td scope="col">
                                    @if ($category->status == 1)
                                        true
                                    @else
                                        false
                                    @endif
                                </td>
                                <td scope="col">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('category.edit', $category->id) }}">
                                            <button class="btn btn-primary btn-sm">edit</button>
                                        </a> &nbsp;
                                        <form action="{{ route('category.destroy', $category->id) }}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete')">delete</button>
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
