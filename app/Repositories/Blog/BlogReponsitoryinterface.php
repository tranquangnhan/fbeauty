<?php


namespace App\Repositories\Blog;


use App\Repositories\RepositoryInterface;

interface BlogReponsitoryinterface extends RepositoryInterface
{
    public function getBlog();
    public function getLastWeek1();
    public function getLastWeek2();
    public function editBlog($id);
    public function getblogbyiddm($id);
    public function updateView($id);
    public function getblogbyView();
    public function getblogbyxuhuong();
}
