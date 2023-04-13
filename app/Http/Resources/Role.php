<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class Role extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $rolePermission = new RolePermissions($this->rolePermission);
        $rolePermissions = $rolePermission->toArray($request);
        return [
            'role' => [
                'id' => $this->id,
                'name' => $this->name,
            ],
            'role_permission' => $rolePermissions,
        ];
    }
}
