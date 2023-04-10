<?php

namespace App\Repositories;

use phpDocumentor\Reflection\Types\Boolean;

interface IRolePermissionRepository {
    /**
     * @param array $command
     * @return bool
     */
    public function createEdit(array $command):bool;
}
