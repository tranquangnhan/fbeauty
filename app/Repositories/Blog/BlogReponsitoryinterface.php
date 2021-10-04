<?php


namespace App\Repositories\Blog;


use App\Repositories\RepositoryInterface;

interface BlogReponsitoryinterface extends RepositoryInterface
{
    public function getBlog();
    
}
