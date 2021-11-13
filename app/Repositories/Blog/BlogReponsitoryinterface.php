<?php


namespace App\Repositories\Blog;


use App\Repositories\RepositoryInterface;

interface BlogReponsitoryinterface extends RepositoryInterface
{
    public function getBlog();
    public function getLastWeek1();
    public function getLastWeek2();
    public function editBlog($slug);
    public function getblogbyiddm($id);
    
}
