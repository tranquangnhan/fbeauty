<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Admin\Province;
use App\Models\Admin\GiamGiaModel;
use App\Repositories\GiamGia\GiamGiaRepository;
use Illuminate\Http\Request;
use App\Http\Requests\GiamGia;

class GiamGiaController extends Controller
{
    private $GiamGia;

    /**
     * GiamGiaController constructor.
     */
    public function __construct(GiamGiaRepository $GiamGia)
    {
        $this->GiamGia = $GiamGia;
        // ProvinceRepository $Province , WardsRepository $wards
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->GiamGia->getAll();
        $mytime = Carbon::now();
        return view('Admin.GiamGia.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $validated = $request->validated();
        $mytime = Carbon::now()->format('Y-m-d');
    if($request->ngayhethan > $request->ngaytao){
        if ($request->ngaytao >= $mytime) {
            $data = [
                'name' => $request->name,
                'ma' => $request->ma,
                'number' => $request->number,
                'max' => $request->max,
                'loai' => $request->loai,
                'ngaytao' => strtotime($request->ngaytao),
                'ngayhethan' =>strtotime($request->ngayhethan)
            ];
        } else {
            return redirect('quantri/giamgia')->with('Vui lòng kiểm tra ngày tạo phải lớn hơn hoặc bằng ngày hiện tại');
        }
    } else {
        return redirect('quantri/giamgia')->with('Vui lòng kiểm tra ngày tạo phải nhỏ hơn ngày hết hạn');
    }



       $data= $this->GiamGia->create($data);
        return redirect('quantri/giamgia')->with('success', 'Thêm thành công');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = $this->GiamGia->find($id);
        //dd($data->tinh);
        return view('Admin.giamgia.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(GiamGia $request, $id)
    {
        $validated = $request->validated();

        $data = [
            'name' => $request->name,
            'ma' => $request->ma,
            'number' => $request->number,
            'max' => $request->max,
            'loai' => $request->loai,
            'ngaytao' => strtotime($request->ngaytao),
            'ngayhethan' =>strtotime($request->ngayhethan)
        ];


       $this->GiamGia->update($id,$data);

        return redirect('quantri/giamgia')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->GiamGia->delete($id);
        return redirect('quantri/giamgia')->with('success', 'Xoá thành công');
        // if ($id > 0){
        //     $this->Coso->delete($id);
        // }
        //  return response()->json([
        //    'title' => 'Đã xóa!',
        //    'text' => 'Cơ sở id' . $id . 'đã xóa thành công',
        //    'status' => 'success!',
        //  ]);

    }
}
