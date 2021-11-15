<div class="danhmuc">
    <div class="title-box-1">
        <span>Danh Mục</span>
    </div>


    </div>
    <div class="list-dm-blog list-danhmuc mt-4">
        @foreach ($danhmuc as $item)
            
        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
            <a href="#" class="d-flex justify-content-between">
                <span class="name">{{$item->name}}</span>
                <span class="number">02</span>
            </a>
        </div>
        @endforeach
        {{-- <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
            <a href="#" class="d-flex justify-content-between">
                <span class="name">Travel</span>
                <span class="number">02</span>
            </a>
        </div>

        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
            <a href="#" class="d-flex justify-content-between">
                <span class="name">Travel</span>
                <span class="number">12</span>
            </a>
        </div>
        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
            <a href="#" class="d-flex justify-content-between">
                <span class="name">Travel</span>
                <span class="number">02</span>
            </a>
        </div>
        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
            <a href="#" class="d-flex justify-content-between">
                <span class="name">Travel</span>
                <span class="number">12</span>
            </a>
        </div> --}}


    </div>

</div>
