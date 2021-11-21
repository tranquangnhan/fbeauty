<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Admin\Province;
use App\Models\Admin\GiamGiaModel;
use App\Repositories\GiamGia\GiamGiaRepository;
use Illuminate\Http\Request;
use App\Http\Requests\GiamGia;
use App\Repositories\DonHang\DonHangRepository;

class GiamGiaController extends Controller
{
    private $GiamGia;
    private $DonHang;

    /**
     * GiamGiaController constructor.
     */
    public function __construct(GiamGiaRepository $GiamGia ,DonHangRepository $DonHang)
    {
        $this->GiamGia = $GiamGia;
        $this->DonHang = $DonHang;
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
        if($validated == true ){
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

       return redirect('quantri/giamgia')->with('thanhcong', 'Sửa giảm giá thành công');
    } else {
        return redirect('quantri/giamgia')->with('thatbai', 'giảm giá không hợp lệ');
    }

        // return redirect('quantri/giamgia')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        $this->GiamGia->delete($id);
//
//        return redirect('quantri/giamgia')->with('success', 'Xoá thành công');
//    }
    // public function findDonHangByIdGiamGia($id, $idDonHang){
    //     $data=$this->DonHang->getDichVuByID($idDonHang);
    //     return $data;
    // }
    public function destroy($id)
    {
        $hasChiTiet = $this->DonHang->getDonHangIdGiamGia($id);
        if(count($hasChiTiet)>0){
            return redirect('quantri/giamgia')->withErrors('Xoá không thành công, giảm giá tồn tại trong đơn hàng và hóa đơn!');
        }else{
            $this->GiamGia->delete($id);
            return redirect('quantri/giamgia')->with('success','Xoá thành công!');
        }
    }

    public function CheckGiamGia($name, $gia){
        $checkCode = $this->GiamGia->CheckCODE($name);
        if ($checkCode == false) {
            $giamgia = $this->GiamGia->GetGiamGiaByCODE($name);
            if ($gia >= $giamgia[0]["max"]) {
                $today = date('Y-m-d');
                if (strtotime($today) < $giamgia[0]["ngayhethan"]) {
                    return $giamgia;
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}
