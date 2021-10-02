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
                             <button class="btn btn-primary waves-effect waves-light mb-3" ><a class="text-white" href="{{route('dichvu.create')}}">Thêm Dịch Vụ</a> </button>
                        </div>
                       
                        <table class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="3%">STT</th>
                                        <th width="20%">Dịch vụ</th>
                                        <th width="15%">Hình ảnh</th>
                                        <th width="15%">Danh mục</th>  
                                        <th width="35%">Mô tả</th>  
                                        <th width="20%">Đơn giá</th>  
                                        <th width="15%">Hành Động</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $i=> $item)

                                        <tr>
                                            <td>{{$i+=1}}</td>
                                            <td>{{$item->tendv}}</td>
                                            <td>
                                                <img width="100%" src="{{asset('Admin/dichvu')}}/{{$item->img}}">
                                            </td> 
                                            <td>
                                                {{$item->name}}
                                            </td> 
                                            <td>
                                                {{$item->motangan}}
                                            </td> 
                                            <td>
                                                {{number_format($item->dongia), ''}} VND
                                            </td> 
                                            <td class="d-flex">
                                                <a name="" id="" class="btn btn-primary mr-2" href="{{route('dichvu.edit',$item->id)}}" role="button"><i class="fa fa-edit"></i></a>   
                                                <form action="{{route('dichvu.destroy',$item->id)}}"  method="post">
                                                    @csrf
                                                    {!!method_field('delete')!!}
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

@endsection