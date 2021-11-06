<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DatLich;
use App\Repositories\Coso\CosoRepository;
use App\Repositories\DichVu\DichVuRepository;
use App\Repositories\KhachHang\KhachHangRepository;
use App\Repositories\DatLich\DatLichRepository;
use App\Repositories\NhanVien\NhanVienRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DatLichController extends Controller
{
    private $CoSo;
    private $DatLich;
    private $DichVu;
    private $KhachHang;
    private $NhanVien;
    private $idCoSo = 1;

    public function __construct(CosoRepository $CoSo,DatLichRepository $DatLich,DichVuRepository $DichVu,KhachHangRepository $KhachHang ,NhanVienRepository $NhanVien)
    {
        $this->CoSo = $CoSo;
        $this->DatLich = $DatLich;
        $this->DichVu = $DichVu;
        $this->KhachHang = $KhachHang;
        $this->NhanVien = $NhanVien;

       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = $this->DatLich->getAllCungCoSo(1);
        $data2 =$this->DatLich->getAll2CungCoSo(1);
        $data3 = $this->DatLich->getAllCungCoSo(1);
        $list = array(
            [$data, $data2, $data3]
        );
        // dd($list);
        for ($y = 0; $y < count($list); $y++){
            foreach ($list[$y] as $datlich)  {    
                foreach ($datlich as $item) {
                    $arrayNameObject = array();
                
                    $arrayIddichvu = json_decode($item->iddichvu);
                    
                    for ($i = 0; $i < count($arrayIddichvu); $i++) {
                        $name = $this->DichVu->getNameByid($arrayIddichvu[$i]);
                        
                        $arrayName = [
                            ['id'=> $arrayIddichvu[$i], 'name' => $name],                
                        ];

                        $arrayNameObject[] = $arrayName;
                    }

                    $item['arrNameObject'] = $arrayNameObject;
                }
                
               
            }
            // dd($item[$i]);
        }

        // dd($list);
        return view('Admin.DatLich.index',['data' => $data, 'data2' => $data2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DichVu = $this->DichVu->getAll();
        $DatLich = $this->DatLich->getAll();
        $KhachHang = $this->KhachHang->getAll();
        $NhanVien = $this->NhanVien->getAll();
        return view('Admin.DatLich.create',['DichVu' => $DichVu, 'DatLich' => $DatLich, 'KhachHang' => $KhachHang, 'NhanVien' => $NhanVien]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                        
        
        $stringDichVu = array_map('intval', $request->iddichvu);
        $stringDichVu = json_encode($stringDichVu);
        $time = strtotime($request->thoigiandat);
        $data = [
            'idcoso'=>$request->idcoso,
            'iddichvu'=> $stringDichVu,
            'idnhanvien'=>$request->idnhanvien,
            'idkhachhang'=>$request->idkhachhang,
            "thoigiandat"=>$time
        ];
        $data= $this->DatLich->create($data);

        return redirect('quantri/datlich')->with('success', 'Đăt lịch thành công');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DichVu = $this->DichVu->getAll();
        $DatLich = $this->DatLich->getAll();
        $KhachHang = $this->KhachHang->getAll();
        $NhanVien = $this->NhanVien->getAll();
        $data  = $this->DatLich->find($id);
        // $cate  = $this->DanhMuc->getAll();
        return view("Admin.DatLich.edit",compact('data','DichVu','DatLich','KhachHang','NhanVien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'iddanhmuc'=>$request->iddanhmuc,
            'name'=> $request->name,
            'slug'=>Str::slug($request->name),
            'mota'=>$request->mota,
            'noidung'=>$request->noidung,
            "trangthai"=>$request->trangthai,
        ];

        if($request->img !== null){
            $img = $this->uploadSingle($request->file('img'));
            $data['img'] = $img;
        }

        $this->DatLich->update($id,$data);
        return redirect('quantri/DatLich')->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // check sản phẩm chi tiết
        $this->DatLich->delete($id);
        return redirect('quantri/DatLich')->with('success','Xoá thành công');
    }
}
