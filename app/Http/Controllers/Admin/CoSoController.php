<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\City;
use App\Models\Admin\Province;
use App\Models\Admin\Wards;
use App\Models\Admin\CosoModel;
use App\Repositories\City\CityRepository;
use App\Repositories\Coso\CosoRepository;
use App\Repositories\Lich\LichRepository;
use App\Repositories\Province\ProvinceRepository;
use App\Repositories\Wards\WardsRepository;
use Illuminate\Http\Request;

class CoSoController extends Controller
{
    private $Coso;
    private $Province;
    private $City;
    private $wards;
    private $Lich;

    /**
     * CosoController constructor.
     */
    public function __construct(CosoRepository $Coso, CityRepository $City, ProvinceRepository $Province, WardsRepository $wards, LichRepository $Lich)
    {
        $this->Coso = $Coso;
        $this->Province = $Province;
        $this->City = $City;
        $this->wards = $wards;
        $this->Lich = $Lich;
        // ProvinceRepository $Province , WardsRepository $wards
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->Coso->getAll();
        // $city = $this->City->find($data->idkhachhang);
        $city = $this->City->getAll();
        $province = $this->Province->getAll();
        $wards = $this->wards->getAll();

        return view('Admin.Coso.index', compact('data', 'city', 'province', 'wards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $validated = $request->validated();

        $data = [
            'name' => $request->name,
            'diachi' => $request->diachi,
            'tinh' => $request->city,
            'quan' => $request->province,
            'huyen' => $request->wards
        ];

        $them = $this->Coso->create($data);
        $this->Lich->CreateLichFromCoso($them->id);
        return redirect('quantri/coso')->with('success', 'Thêm thành công');
    }

    public function select_delivery(Request $request)
    {
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == "city") {
                $select_province = Province::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();
                $output .= '<option>---Chọn quận huyện---</option>';
                foreach ($select_province as $key => $province) {

                    $output .= '<option value="' . $province->maqh . '">' . $province->name_quanhuyen . '</option>';
                }
            } else {
                $select_wards = Wards::where('maqh', $data['ma_id'])->orderby('xaid', 'ASC')->get();
                $output .= '<option>---Chọn xã phường---</option>';
                foreach ($select_wards as $key => $ward) {
                    $output .= '<option value="' . $ward->xaid . '">' . $ward->name_xaphuong . '</option>';
                }
            }
            echo $output;
        }
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

        $data = $this->Coso->find($id);
        //dd($data->tinh);
        $city = $this->City->getAll();
        $province = $this->Province->getAll();
        $wards = $this->wards->getAll();
        return view('Admin.coso.edit', compact('data', 'city', 'province', 'wards'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = [
            'name' => $request->name,
            'diachi' => $request->diachi,
            'tinh' => $request->city,
            'quan' => $request->province,
            'huyen' => $request->wards
        ];

        $this->Coso->update($id, $data);


        return redirect('quantri/coso')->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Lich->deleteLichByIdCoSo($id);
        $this->Coso->delete($id);
        return redirect('quantri/coso')->with('success', 'Xoá thành công');
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
