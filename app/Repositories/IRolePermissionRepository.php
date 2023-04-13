<?php

namespace App\Repositories;

interface IRolePermissionRepository {
    /**
     * @param array $command
     * @return int
     */
    public function createRole(array $command, array $commandPermission):int;
}
