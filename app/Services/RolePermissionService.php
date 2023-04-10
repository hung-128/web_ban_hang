<?php
namespace App\Services;

use App\Repositories\IRolePermissionRepository;
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

    public function createEdit($command){
        $id = $command['id'];
        if ($id){
            $rolePermission = $this->rolePermissionRepository->find($id);
            if (!$rolePermission) {
                throw new NotFoundHttpException('ID role không đúng');
            }
        }

        DB::beginTransaction();
        $result = $this->rolePermissionRepository->createEdit($command);
        if (!$result){
            DB::rollBack();
        }
        DB::commit();
    }
}
