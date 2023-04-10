<?php

namespace App\Http\Controllers\Admin;

use App\Constant\RolePermissionConst;
use App\Http\Controllers\Controller;
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

    public function createEditView($id = null){
        $modules = RolePermissionConst::$module;
        return view('admin.role_permission.create-role-permission', ['modules' => $modules]);
    }

    public function createEdit(Request $request, $id = null){

        $data = $request->input();
        $command = [
            'id' => $id,
            'user' => $data['user'] ?? [],
            'category' => $data['category'] ?? [],
            'book' => $data['book'] ?? [],
            'news' => $data['news'] ?? [],
            'roles' => $data['roles'] ?? [],
            'author' => $data['author'] ?? [],
        ];
        $rolePermissionService = $this->rolePermissionService->createEdit($command);
        $modules = RolePermissionConst::$module;
        return view('admin.role_permission.create-role-permission', ['modules' => $modules]);
    }

    public function list(){
        $roles = RolePermission::all();
        return view('admin.role_permission.list-role-permission', ['roles' => $roles]);
    }
}
