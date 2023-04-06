<?php
namespace App\Constant;

class RolePermissionConst
{
    const User = 'User';
    const Category = 'Category';
    const Role = 'Role';
    const Author = 'Author';
    const Book = 'Book';
    const News = 'News';

    public static $module = [
        self::User => 'user',
        self::Category => 'category',
        self::Book => 'book',
        self::News => 'news',
        self::Role => 'roles',
        self::Author => 'author'
    ];
}
