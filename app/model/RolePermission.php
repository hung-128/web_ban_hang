<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role_permission';

    protected $fillable = ['role_id', 'module', 'value'];

    /**
     * Get the role that owns the comment.
     */
    public function role()
    {
        return $this->belongsTo('App\model\Role');
    }
}
