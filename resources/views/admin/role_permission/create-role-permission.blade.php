@extends('layouts.admin.layout')
@section('content')
    <!-- general form elements -->


    <div class="row" style="margin-left: 5px; margin-bottom: 5px">
        <a href="{{route('role-permission.create')}}" class="btn btn-primary">Create</a>
        <a href="{{route('role-permission.list')}}" class="btn btn-primary">List</a>
    </div>

    <div class="card card-primary">


        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{route('role-permission.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="role_name">Role</label>
                    <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter role name" value="@if(isset($role['name'])){{ $role['name'] }} @endif">
{{--                    @error('role_name')--}}
{{--                    <p style="color: red">{{ $message }}</p>--}}
{{--                    @enderror--}}
                </div>
                <label for="role_name">Permission</label>
                <div class="card card-success">
                    <div class="card-body">
                        @php
                            $createVal = App\Constant\RolePermissionConst::CREATE_VALUE;
                            $editVal = App\Constant\RolePermissionConst::EDIT_VALUE;
                            $viewVal = App\Constant\RolePermissionConst::VIEW_VALUE;
                        @endphp
                        @foreach ($modules as $key => $value)
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- checkbox -->
                                    <label for="checkboxPrimary1">
                                        {{ $key }}
                                    </label>

                                    <div class="form-group clearfix">
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary1"  name="{{$value}}[]" @if(in_array($createVal,$rolePermissions[$module]['value'])) checked @endif value="{{ $createVal }}">
                                            <label for="checkboxPrimary1">
                                                Create
                                            </label>
                                        </div>
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary2" name="{{$value}}[]" @if(in_array($editVal,$rolePermissions[$module]['value'])) checked @endif value="{{$editVal}}">
                                            <label for="checkboxPrimary2">
                                                Edit
                                            </label>
                                        </div>
                                        <div class="icheck-primary col-3 d-inline">
                                            <input type="checkbox" id="checkboxPrimary3" name="{{$value}}[]" @if(in_array($viewVal,$rolePermissions[$module]['value'])) checked @endif value="{{ $viewVal }}">
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
