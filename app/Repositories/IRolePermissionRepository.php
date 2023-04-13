<?php

namespace App\Repositories;

use phpDocumentor\Reflection\Types\Boolean;

interface IRolePermissionRepository {
    /**
     * @param array $command
     * @return bool
     */
    public function createRole(array $command, array $commandPermission):bool;
}
