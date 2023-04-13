<?php

namespace App\Http\Controllers\Admin;

use App\Constant\RolePermissionConst;
use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermissionPost;
use App\Http\Resources\Role as RoleResource;
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

    public function create(){
        return view('admin.role_permission.create-role-permission', ['modules' => RolePermissionConst::$module]);
    }

    public function store(RolePermissionPost $request, $id = null){

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

        $rolePermissionService = $this->rolePermissionService->store($commandRole, $commandPermission);

        $modules = RolePermissionConst::$module;
        return view('admin.role_permission.create-role-permission', ['modules' => $modules]);
    }

    public function edit($roleId, Request $request){
        $rolePermission = $this->rolePermissionService->edit($roleId);
        $roleResource = new RoleResource($rolePermission);
        $result = $roleResource->toArray($request);
        dd($result);

        return view('admin.role_permission.create-role-permission', ['modules' => RolePermissionConst::$module]);
    }

    public function update(Request $request){

    }

    public function show(){
        return view('admin.role_permission.list-role-permission', ['roles' => $roles]);
    }
}
