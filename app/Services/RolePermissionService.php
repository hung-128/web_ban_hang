<?php
namespace App\Services;

use App\Exceptions\AppException;
use App\Repositories\IRolePermissionRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RolePermissionService {

    /**
     * @var IRolePermissionRepository
     */
    private $rolePermissionRepository;

    public function __construct(IRolePermissionRepository $rolePermissionRepository)
    {
        $this->rolePermissionRepository = $rolePermissionRepository;
    }

    /**
     * @param $commandRole
     * @param $commandPermission
     * @return int
     */
    public function store($commandRole, $commandPermission){
        try {
            $result = $this->rolePermissionRepository->createRole($commandRole, $commandPermission);
            DB::commit();
        } catch( Exception $e){
            DB::rollBack();
        }
        return $result;
    }

    public function edit($roleId) {
        $role = $this->rolePermissionRepository->find($roleId);
        if(!$role){
            throw new NotFoundHttpException('Không tìm thấy Role');
        }
        return $role;
    }
}
