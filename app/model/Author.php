<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['status'];
    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
