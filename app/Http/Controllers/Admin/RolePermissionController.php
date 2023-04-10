<?php

namespace App\Http\Controllers\Admin;

use App\Constant\RolePermissionConst;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermissionPost;
use App\model\RolePermission;
use App\Services\RolePermissionService;
use Illuminate\Http\Request;


class RolePermissionController extends Controller
{
    /**
     * @var RolePermissionService
     */
    protected RolePermissionService $rolePermissionService;

    /**
     * @param RolePermissionService $rolePermissionService
     */
    public function __construct(RolePermissionService $rolePermissionService)
    {
        $this->rolePermissionService = $rolePermissionService;
    }

    public function createEditView(Request $request, $id = null){
        $modules = RolePermissionConst::$module;
        return view('admin.role_permission.create-role-permission', ['modules' => $modules]);
    }

    public function createEdit(RolePermissionPost $request, $id = null){

        $data = $request->input();
        $commandRole = [
            'id' => $id,
            'role_name' => $data['role_name'] ?? '',
        ];
        $commandPermission = [
            'user' => $data['user'] ?? [],
            'category' => $data['category'] ?? [],
            'book' => $data['book'] ?? [],
            'news' => $data['news'] ?? [],
            'roles' => $data['roles'] ?? [],
            'author' => $data['author'] ?? [],

        ];
        $validated = $request->validated();

        $rolePermissionService = $this->rolePermissionService->createEdit($commandRole, $commandPermission);
        $modules = RolePermissionConst::$module;
        return view('admin.role_permission.create-role-permission', ['modules' => $modules]);
    }

    public function list(){
        $roles = RolePermission::all();
        return view('admin.role_permission.list-role-permission', ['roles' => $roles]);
    }
}
