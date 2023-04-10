@extends('layouts.admin.layout')
@section('content')
    <!-- general form elements -->


    <div class="row" style="margin-left: 5px; margin-bottom: 5px">
        <a href="{{route('admin.createRolePermission')}}" class="btn btn-primary">Create</a>
        <a href="{{route('admin.listRolePermission')}}" class="btn btn-primary">List</a>
    </div>

    <div class="card card-primary">


        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{route('admin.createRolePermissionProcess')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="role_name">Role</label>
                    <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter role name">
                </div>
                <label for="role_name">Permission</label>
                <div class="card card-success">
                    <div class="card-body">
                        @foreach ($modules as $key => $value)
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- checkbox -->
                                    <label for="checkboxPrimary1">
                                        {{ $key }}
                                    </label>
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary1"  name="{{$value}}[]" value="0">
                                            <label for="checkboxPrimary1">
                                                Create
                                            </label>
                                        </div>
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary2" name="{{$value}}[]" value="10">
                                            <label for="checkboxPrimary2">
                                                Edit
                                            </label>
                                        </div>
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary3" name="{{$value}}[]" value="20">
                                            <label for="checkboxPrimary3">
                                                View
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Many more skins available. <a href="https://bantikyan.github.io/icheck-bootstrap/">Documentation</a>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
