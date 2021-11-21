<div class="danhmuc">
    <div class="title-box-1">
        <span>Danh Mục</span>
    </div>


    </div>
    <div class="list-dm-blog list-danhmuc mt-4">
        @foreach ($danhmuc as $item)
            
        <div class="danhmuc-item" style="background: url('{{ asset('uploads/')}}/{{$item->img}}')">
            <a href="#" class="d-flex justify-content-between">
                <span class="name">{{$item->name}}</span>
            </a>
        </div>
        @endforeach

    </div>

</div>
