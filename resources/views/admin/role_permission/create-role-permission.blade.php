@extends('layouts.admin.layout')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="role_name">Role</label>
                    <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter role name">
                </div>
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
                                            <input type="checkbox" id="checkboxPrimary1" checked>
                                            <label for="checkboxPrimary1">
                                                Create
                                            </label>
                                        </div>
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary2">
                                            <label for="checkboxPrimary2">
                                                Edit
                                            </label>
                                        </div>
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary3" disabled>
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
