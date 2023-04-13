<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

    protected $fillable = ['name'];

    /**
     * Get the permissions for the role.
     */
    public function rolePermission()
    {
        return $this->hasMany('App\model\RolePermission', 'role_id');
    }
}
