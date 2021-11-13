@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div>
                             <button class="btn btn-primary waves-effect waves-light mb-3" ><a class="text-white" href="{{route('khachhang.create')}}">Thêm khách hàng</a> </button>
                        </div>
                       
                        <table class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="3%">STT</th>
                                        <th width="20%">Khách hàng</th>
                                        <th width="20%">Hình ảnh</th>
                                        <th width="15%">Điện thoại</th>  
                                        <th width="30%">Email</th>  
                                        <th width="15%">Hành động</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i=> $item)

                                        <tr>
                                            <td>{{$i+=1}}</td>
                                            <td>{{$item->name}} <br>
                                                <?php if($item->active == 0) echo "<div class=\"bg-danger mt-2 rounded-circle\" style=\"width:15px ;height: 15px;\"> </div>";
                                                else echo "<div class=\"bg-success mt-2 rounded-circle\" style=\"width:15px ;height: 15px;\"> </div>";?>
                                            </td>
                                            <td> 
                                                <img  class="img-common"  src="{{ asset('uploads/'.$item->img) }}">
                                            </td> 
                                            <td>
                                                {{$item->sdt}}
                                            </td> 
                                            <td>
                                                {{$item->email}}
                                            </td> 
                                            <td class="d-flex border-none">
                                                <a href="{{url('quantri/khachhang/detail/'.$item->id)}}" class="d-flex justify-content-center mr-2"><div class="btn btn-success"><i class="fa fa-info-circle"></i></div></a>
                                                <a name="" id="" class="btn btn-primary mr-2" href="{{route('khachhang.edit',$item->id)}}" role="button"><i class="fa fa-edit"></i></a>   
                                                <form action="{{route('khachhang.destroy',$item->id)}}"  method="post">
                                                    @csrf
                                                    {!!method_field('delete')!!}
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa không ?');"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                   
                             
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row d-flex justify-content-end">
                <div class="col-lg-5">
                    <nav>
                        <ul class="pagination pagination-split">
                            <?php
                            // echo $Pagination;
                            ?>      
                        </ul>
                    </nav>    
                      
                </div>
            </div>
                 
         
            
        </div> <!-- container-fluid -->

    </div> <!-- content -->


</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection