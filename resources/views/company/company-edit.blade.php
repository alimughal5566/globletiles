@extends('layouts.app')

@section('content')
    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Update Company</h5>
            </div>
            <form method="post" action="{{route('updateCompany',[$data->id])}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" value="{{$data->name}}" name="name" class="form-control" required>
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
