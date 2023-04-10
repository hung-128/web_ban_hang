<?php

namespace App\Repositories\Repo;

use App\model\Role;
use App\model\RolePermission;
use App\Repositories\IRolePermissionRepository;

class RolePermissionRepository extends BaseRepository implements IRolePermissionRepository
{
    /**
     * @return string
     */
    public function getModel(): string
    {
        return RolePermission::class;
    }

    public function createEdit(array $command, array $commandPermission): bool
    {
        $role = new Role();
        $role->name = $command['role_name'];
//        dd($commandPermission);
        $role->save();
        foreach ($commandPermission as $module => $index) {
            foreach ($index as $value) {
                RolePermission::insert([
                    'role_id' => $role->id,
                    'module' => $module,
                    'value' => $value
                ]);
            }
        }

        return true;
    }
}
