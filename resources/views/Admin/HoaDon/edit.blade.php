@extends('Admin.LayoutAdmin')

@section('content')
    <style>
        .tab-pane {
            height: 400px;
            width: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .tab-pane::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }

        .tab-pane::-webkit-scrollbar-thumb {
            background-color: #c4c4c4;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-8">

                        <div class="card-box">
                            <div class="alert-light " style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
                                 role="alert">
                                <div class="container">
                                    @if(isset($customer->img)&&$customer->img!="")
                                        <img class="avthoadon" src="{{asset('uploads')}}/khachhang/{{$customer->img}}">
                                    @else
                                        <img src="{{asset('uploads')}}/khachhang/default-avatar-kh.jpg" class="avthoadon">
                                        @endif
                                        @if(isset($customer->name) && $customer->sdt!="")
                                    <span class="text-primary font-weight-bold">{{$customer->name}}</span>
                                    @endif
                                        @if($customer->sdt!="")
                                    <span class="ml-3"><i class="fa fa-phone"> <span
                                                class="text-primary"><a href="tel:{{$customer->sdt}}">{{$customer->sdt}}</a></span></i></span>
                                        @endif
{{--                                        addfromdatlich--}}
                                </div>
                            </div>
                            <hr>
                            <div class="panel-body">
                                @if(session('addfromdatlich'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session('addfromdatlich')}}
                                    </div>
                                @endif
                                <table class="table table-borderless"
                                       style="border-collapse: separate; border-spacing: 0 1em;">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="35%">T??n / D???ch v???</th>
                                        <th scope="col">S??? l?????ng</th>
                                        <th scope="col">Gi?? khuy???n m??i</th>
                                        <th scope="col">Th??nh ti???n</th>
                                    </tr>
                                    </thead>
                                    <tbody id="ShowHoaDon">

                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Nh???p m?? gi???m gi??: </label> <br>
                                        <input type="text" class="form-control" name="magiamgia" id="magiam"
                                               placeholder="Nh???p m?? gi???m gi??"
                                               oninput="this.value = this.value.toUpperCase()">
                                        <button class="btn btn-primary mt-1" onclick="ApDung()">??p d???ng</button>
                                    </div>
                                    <div class="col-md-7">
                                        <table class="table table-borderless">
                                            <tbody>
                                            <tr>
                                                <td class="">Th??nh ti???n:</td>
                                                <td class="float-right" id="thanhtien"></td>
                                            </tr>
                                            <tr>
                                                <td class="">M?? gi???m gi?? h??a ????n:</td>
                                                <td class="float-right" id="magiamgia"></td>
                                            </tr>
                                            <tr>
                                                <td class="">Gi???m:</td>
                                                <td class="float-right" id="tiengiam">0</td>
                                            </tr>
                                            <tr class=" border-top">
                                                <td class="font-weight-bold">T???m t??nh</td>
                                                <td class="float-right font-weight-bold"><span id="tongtien"></span> VND
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-print-none">
                                    <div class="float-right">
                                        <a href="{{route('hoadonchitiet.show', $hoadon->id)}}"
                                           class="btn btn-dark waves-effect waves-light">In h??a ????n <i class="fa fa-print"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="bg-white p-1" style="border-radius: 5px;">
                            <div class="input-group mb-2 border rounded-pill p-1">
                                <input type="text" id="timkiemfilter" onkeyup="Search()"
                                       placeholder="Nh???p t??? b???n c???n t??m" aria-describedby="button-addon3"
                                       class="form-control bg-none border-0">
                                <div class="input-group-append border-0">
                                    <button id="button-addon3" type="button" class="btn btn-link text-success" disabled>
                                        <i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                       aria-controls="home" aria-selected="true">D???ch v???</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                       aria-controls="profile" aria-selected="false">S???n ph???m</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-0" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                </div>
                                <div class="tab-pane fade p-0" id="profile" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <script src="{{asset('Admin/assets/js/hoadon.js')}}"></script>

@endsection
