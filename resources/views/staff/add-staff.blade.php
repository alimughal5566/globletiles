@extends('layouts.app')

@section('content')
    <div class="set_form">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Add User</h5>
            </div>
            <form method="post" action="{{route('createStaff')}}" autocomplete="off" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" name="f_name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Last Name</label>
                            <input type="text" name="l_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">E-mail</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Age</label>
                            <input type="text" name="age" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Select User Type</label>
                            <select  name="type" class="form-control " style="background: #27293d; ">
                                <option value="" disabled selected >User Type</option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer pull-right">
                    <button type="submit" class="btn btn-fill btn-primary">save</button>
                </div>
            </form>
        </div>
    </div>



@endsection
