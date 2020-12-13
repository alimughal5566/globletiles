@extends('layouts.app')

@section('content')
    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <h5 class="title">update Category</h5>
            </div>
            <form method="post" action="{{route('productEdit',[$product->id])}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Select Category</label>
                            <select  name="category_id" class="form-control " style="background: #27293d; " required>
                                <option value="{{$product->category->id}}"  selected >{{$product->category->name}}</option>
                                @foreach($data as $datum)
                                    <option value="{{$datum->id}}">{{$datum->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Select Company</label>
                            <select  name="company_id" class="form-control " style="background: #27293d; " required>
                                <option value="{{$product->company_id}}" disabled selected >Select Company</option>
                                @foreach($companies as $datum)
                                    <option value="{{$datum->id}}">{{$datum->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">description</label>
                            <input type="text" name="description" value="{{$product->description}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Price</label>
                            <input type="text" value="{{$product->price}}" name="price" placeholder="Price" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="btn btn-outline-neutral">image
                                <input type="file" name="thumbnail"  class="form-control" required >
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-footer pull-right">
                    <button type="submit" class="btn btn-fill btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
