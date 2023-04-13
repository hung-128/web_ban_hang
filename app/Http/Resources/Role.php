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
        return [
            'id' => $this->id,
            'name' => $this->name,
            'role_permission' => $this->rolePermission->map(function ($permission) {
                return [
                    'id' => $permission->id,
                    'role_id' => $permission->role_id,
                    'module' => $permission->module,
                    'value' => $permission->value,
                ];
            })->toArray(),
        ];
    }
}
