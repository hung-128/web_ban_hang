<?php
namespace App\Constant;

class RolePermissionConst
{
    const User = 'Users';
    const Category = 'Categories';
    const Role = 'Roles';
    const Author = 'Authors';
    const Book = 'Books';
    const News = 'News';

    public static $module = [
        self::User => 'user',
        self::Category => 'category',
        self::Book => 'book',
        self::News => 'news',
        self::Role => 'roles',
        self::Author => 'author'
    ];
    const CREATE_VALUE = 20;
    const EDIT_VALUE = 10;
    const VIEW_VALUE = 0;
}
