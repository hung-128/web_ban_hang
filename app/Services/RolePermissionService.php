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

    public function createEdit($commandRole, $commandPermission){
        try {
            $id = $commandRole['id'];
            if ($id){
                $rolePermission = $this->rolePermissionRepository->find($id);
                if (!$rolePermission) {
                    throw new NotFoundHttpException('ID role không đúng');
                }
            }
            $result = $this->rolePermissionRepository->createEdit($commandRole, $commandPermission);
            if (!$result){
                throw new AppException('Lưu không thành công');
            }
            DB::commit();
        } catch( Exception $e){
            DB::rollBack();
        }
    }
}
