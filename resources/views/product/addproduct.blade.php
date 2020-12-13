@extends('layouts.app')

@section('content')
    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Add Category</h5>
            </div>
            <form method="post" action="{{route('createProduct')}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" placeholder="Product" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Select Company</label>
                            <select  name="company_id" class="form-control " style="background: #27293d; " required>
                                <option value="" disabled selected >Select Company</option>
                                @foreach($companies as $datum)
                                    <option value="{{$datum->id}}">{{$datum->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Select Category</label>
                            <select  name="category_id" class="form-control " style="background: #27293d; " required>
                                <option value="" disabled selected >Select Category</option>
                                @foreach($data as $datum)
                                    <option value="{{$datum->id}}">{{$datum->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">description</label>
                            <input type="text" name="description" placeholder=" Description " class="form-control" required>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Price</label>
                            <input type="text" name="price" placeholder="Price" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="btn btn-outline-neutral">image
                                <input type="file" name="thumbnail"  class="form-control" required >
                            </label>
                        </div>
                    </div>
                <div class="card-footer pull-right">
                    <button type="submit" class="btn btn-fill btn-primary">save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
