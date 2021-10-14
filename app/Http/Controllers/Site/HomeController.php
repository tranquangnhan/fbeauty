<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        private $SanPham;
        private $Blog;
    
        public function __construct( SanPhamRepository $SanPham , BlogRepository $Blog)
        {
            $this->SanPham = $SanPham;
            $this->Blog = $Blog;
        }
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $data = $this->SanPham->getAll();
            $Blog = $this->Blog->getBlog1();
            $Blog2 = $this->Blog->getBlog2();
            return view("Site.home", ['data' => $data,'Blog' => $Blog,'Blog2' => $Blog2]);
        }
}
