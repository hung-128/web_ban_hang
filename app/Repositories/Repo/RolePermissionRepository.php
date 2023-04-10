<?php

namespace App\Repositories\Repo;

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

    public function createEdit(array $command): bool
    {
        return false;
    }
}
