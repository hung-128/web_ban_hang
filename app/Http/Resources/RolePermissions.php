<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RolePermissions extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [];
        foreach ($this->collection as $rolePermission){
            $data[$rolePermission->module] = [
                'id' => $rolePermission->id,
                'role_id' => $rolePermission->role_id,
                'module' => $rolePermission->module,
                'value' => explode(",", $rolePermission->value),
            ];
        }
        return $data;
    }
}
