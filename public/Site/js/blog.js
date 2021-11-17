// $('.xemthemblog').click(function(){    
//     let iddm = $(this).attr('data-iddm');
    
//     $('[data-danhmuc='+iddm+']').append(html);
// });
// function getblogbyiddm2(iddm) {
// function gethtml(data) {
 
// var html = `  
// 
// }
// }



// function getListHTMLblog(blog) {

//     var html = `  
//     <div class="col-xl-4">
//         <div class="tin-item-1 box-tin-hv">
//             <div class="image-tin-1" style="height: 220px">
//                 <img class="img-fluid" src="{{ asset('uploads') }}/" alt="">
//             </div>
//             <div class="content-tin-3 background-white">
//                 <div class="row">
//                     <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
//                         <div class="mr-3">
//                             <a href="" class="box-danhmuc-1">
//                                 </a>
//                         </div>
//                         <span>${blog.created_at}</span>
//                     </div>
//                 </div>
//                 <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
//                     <a href="" class="hover-pink">${blog.name}</a>
//                 </div>
//                 <p class="blog-mota mb-0">
                    
//                 </p>
//             </div>
//         </div>`;

//     return html;
// }
/*
	Load more content with jQuery - May 21, 2013
	(c) 2013 @ElmahdiMahmoud
*/   

$('.xemthemblog').click(function (e) { 
	let _token   = $('meta[name="csrf-token"]').attr('content');
	let take = $(this).attr('data-take');
	let skip = $(this).attr('data-skip');
	let id = $(this).attr('data-iddm');
	let nextSkip = parseInt(skip) + parseInt(take);

	let data = {
		take: take,
		skip: skip,
		id: id,		
		_token: _token,
	}

	$.ajax({
		type: "POST",
		url: getBlogsPagiUrl,
		data: data,
		success: function (respon) {
			if (respon.success) {
				let html = loopBlogs(respon.blog);
				$('[data-danhmuc='+id+']').append(html);
					
				$('[data-iddm='+id+']').attr('data-skip', nextSkip);
			} else {
				
			}

		},
		error: function () {
			swal.fire({
				icon: 'error',
				title: 'Đã xảy ra lỗi',
				text: 'Gửi dữ liệu không thành công',
				confirmButtonText: 'Thử lại',
			});
		}
	});
});

function loopBlogs(blogs) {
	var html;
	blogs.forEach(element => {
		html += blogItemHTML(element);
	});

	return html;
}

function blogItemHTML(blog) {
	let html = 
	`
	<div class="col-xl-4">
	    <div class="tin-item-1 box-tin-hv">
	        <div class="image-tin-1 mt-3" style="height: 220px">
	            <img class="img-fluid" src="uploads/${blog.img}" alt="">
	        </div>
	        <div class="content-tin-3 background-white">
	            <div class="row">
	                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
	                    <div class="mr-3">
	                        <a href="" class="box-danhmuc-1">${blog.danhmuc}</a>
	                    </div>
						<span>${blog.created_at}</span>
	                </div>
	            </div>
	            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
	                <a href="" class="hover-pink">${blog.name}</a>
	            </div>
	            <p class="blog-mota mb-0">
					${blog.motangan}
	            </p>
	        </div>
	    </div>`;
	return html;
}