<?php

namespace App\Http\Controllers\Admin;

use App\Constant\RolePermissionConst;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RolePermissionController extends Controller
{
    public function createEditView($id = null){
        $modules = RolePermissionConst::$module;
        return view('admin.role_permission.create-role-permission', ['modules' => $modules]);
    }
}
