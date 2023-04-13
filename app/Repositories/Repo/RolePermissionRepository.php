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
        return Role::class;
    }

    /**
     * @param array $command
     * @param array $commandPermission
     * @return int
     */
    public function createRole(array $command, array $commandPermission): int
    {
        $role = new Role();
        $role->name = $command['role_name'];
        $role->save();
        foreach ($commandPermission as $module => $index) {
            $value = implode(",", $index);
            if (!empty($value)){
                RolePermission::insert([
                    'role_id' => $role->id,
                    'module' => $module,
                    'value' => $value
                ]);
            }
        }
        return $role->id;
    }
}
