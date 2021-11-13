$('.xemthemblog').click(function(){    
    let iddm = $(this).attr('data-iddm');
    
    $('[data-danhmuc='+iddm+']').append(html);
});

var html = `
<div class="row mb-30px">
<div class="col-xl-4">
    <div class="tin-item-1 box-tin-hv">
        <div class="image-tin-1" style="height: 220px">
            <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
        </div>
        <div class="content-tin-3 background-white">
            <div class="row">
                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                    <div class="mr-3">
                        <a href="" class="box-danhmuc-1">
                        Sức khỏe</a>
                    </div>
                    <span>Thứ ba, 26/10/2021, 21:00</span>
                </div>
            </div>
            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
            </div>
            <p class="blog-mota mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
            </p>
        </div>
    </div>
</div>

<div class="col-xl-4">
    <div class="tin-item-1 box-tin-hv">
        <div class="image-tin-1" style="height: 220px">
            <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
        </div>
        <div class="content-tin-3 background-white">
            <div class="row">
                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                    <div class="mr-3">
                        <a href="" class="box-danhmuc-1">
                        Sức khỏe</a>
                    </div>
                    <span>Thứ ba, 26/10/2021, 21:00</span>
                </div>
            </div>
            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
            </div>
            <p class="blog-mota mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
            </p>
        </div>
    </div>
</div>

<div class="col-xl-4 ">
    <div class="tin-item-1 box-tin-hv">
        <div class="image-tin-1" style="height: 220px">
            <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
        </div>
        <div class="content-tin-3 background-white">
            <div class="row">
                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                    <div class="mr-3">
                        <a href="" class="box-danhmuc-1">
                        Sức khỏe</a>
                    </div>
                    <span>Thứ ba, 26/10/2021, 21:00</span>
                </div>
            </div>
            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
            </div>
            <p class="blog-mota mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
            </p>
        </div>
    </div>
</div>
</div>
`;