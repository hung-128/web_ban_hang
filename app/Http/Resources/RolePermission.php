<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RolePermission extends JsonResource
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
            'role_id' => $this->role_id,
            'module' => $this->module,
            'value' => $this->value,
        ];
    }
}
