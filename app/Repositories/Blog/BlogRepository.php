<?php


namespace App\Repositories\Blog;

use App\Models\Admin\BlogModel;
use App\Repositories\BaseRepository;
use Illuminate\Cache\RateLimiting\Limit;

class BlogRepository extends BaseRepository implements BlogReponsitoryinterface
{
    protected $model;

    public function getModel()
    {
        return BlogModel::class;
    }

    public function getBlog()
    {
        return $this->model->select('blog.*', 'danhmuc.name AS danhmuc' ) 
            ->join('danhmuc', 'blog.iddm', '=', 'danhmuc.id') 
            ->get();
    }
    public function getBlog1()
    {
        return $this->model->select('blog.*') 
        ->offset(0)->limit(1)->get(); 
    }
    public function getBlog2()
    {
        return $this->model->select('blog.*') 
        ->offset(1)->limit(3)->get(); 
    }
    public function editBlog($id)
    {
        return $this->model->select('blog.*', 'blog.id','danhmuc.name')
            ->join('danhmuc', 'blog.iddm', '=', 'danhmuc.id')
            ->where('blog.id', $id)
            ->get();
    }
}
