@extends("layout")
@section("content")
<div class="container">
    <h3 class="text-center mt-5"> Product Edit</h3>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8 ">
            <div class="form-area bg-info rounded">
                <form action="{{route('product.update',$product->id)}}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Product Name</label>
                            <input type="text" name="productname" class="form-control" value="{{$product->productname}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option selected>Select menu</option>
                                <option value="1" {{$category->status==1 ? 'selected' :''}}>True</option>
                                <option value="2" {{$category->status==2 ? 'selected' :''}}>False</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection();
@push("css")
<style>
    .form-area {
        padding: 20px;
        margin-top: 20px;
    }
</style>
@endpush()