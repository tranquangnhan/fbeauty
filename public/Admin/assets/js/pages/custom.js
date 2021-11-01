const pathUploadImg = 'http://127.0.0.1:8000/';
$("#add-field").click(function() {
    $("#some_div").append(`
    <div class="box-detail"  >
        <div class="input-block " >
            <div class="form-group">
                <label >Nhập số ml</label>
                <input type="number" name="ml[]"  parsley-trigger="change" required
                placeholder="Nhập tên nhà sản xuất" class="form-control" id="userName">
            </div>

            <div class="form-group">
                <label >Nhập số lượt tồn kho</label>
                <input type="number" name="tonkho[]"  parsley-trigger="change" required
                placeholder="Nhập Số lượt tồn kho" class="form-control" id="userName">
             </div>

            <div class="form-group">
                <label >Nhập đơn giá sản phẩm</label>
                 <input type="number" name="dongia[]"  parsley-trigger="change" required
                placeholder="Đơn giá sản phẩm" class="form-control" id="userName">
            </div>
           

            <input type="button" class="remove-field btn btn-danger" value="-">
        </div>
    </div>
    `);
});

$(document).on("click", ".remove-field", function() {
    $(this).closest(".box-detail").remove();
});

$(document).ready(function() {
    $('#key-table').DataTable(
        {
            "language": {
                "lengthMenu": "_MENU_",
                "zeroRecords": "Nothing found - sorry",
                "info": "Xem trang _PAGE_ / tổng _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search":"Tìm Kiếm",
                "paginate": {
                    "first":      "Trang Đầu",
                    "last":       "Trang Cuối",
                    "next":       "Trang Sau",
                    "previous":   "Trang Trước"
                },
            }
        }
    );
});

function showFullImage(event){
    const srcImage = event.target.getAttribute("src");
    const idLieuTrinh = $(event.target).prev().val();
    $('#myModal').modal('show')
    changeSrcImg(srcImage);
    $("#idlieutrinhgan").val(idLieuTrinh);

}

function changeSrcImg(srcImage){
    $("#imgshow").attr("src", srcImage);
}

function changImg(){

   $("#inputfile").change(function (e) { 
       e.preventDefault();

       var formData = new FormData();
       const idlieutrinhgan = $("#idlieutrinhgan").val();
       var file = $('#inputfile')[0].files;

       formData.append('idlieutrinhgan',idlieutrinhgan);
       formData.append('file',file[0]);
       
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':  $('input[name="_token"]').val(),
            },
        });

        $.ajax({
            type: "POST",
            url: "quantri/editimglieutrinh",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {

                changeSrcImg(pathUploadImg+'uploads/'+response.imgkhachhang);
                $.each($(".idlieutrinh"), function (index, val) { 
                    if(val.value == response.id) {
                        $(val.nextElementSibling).attr("src", pathUploadImg+'uploads/'+response.imgkhachhang);
                    }
                });
            
            }
        });

   });
}
changImg()



$(document).ready(function() {
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editable.defaults.ajaxOptions = {type: "PUT"};

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('input[name="_token"]').val(),
        },
    });

    $('.mota').editable({
        type: 'text',
        pk: 1,
        url: 'quantri/editnamedv',
        title: 'Enter username',
        success: function(response) {
            if(response.status == 'error') return response.msg;
        },
        error:function(err){
           if(err.status === 500){
             alert('Bạn chưa nhập nội dung!');
           }
        }
    });

    $('.date').editable({
        format: 'yyyy-mm-dd',    
        viewformat: 'dd/mm/yyyy',    
        url: 'quantri/editnamedv',
        title: 'Enter date',
        success: function(response) {
            if(response.status == 'error') return response.msg; 
        },
        error:function(err){
           if(err.responseText){
               alert(JSON.parse(err.responseText).errors.value[0])
           }
        }
    });

});


 async function delLieuTrinh(id){

    var formData = new FormData();
    
    formData.append('id',id);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':  $('input[name="_token"]').val(),
        },
    });

    if(check){
        await $.ajax({
            type: "POST",
            url: "quantri/edittrangthailieutrinh",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response)
            }
        });

    }
   
}

async function checkDelete(text) { 

    return await Swal.fire({
        title: 'Bạn có chắc chắn không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng Ý',
        cancelButtonText: 'Huỷ'
      }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Đã xoá!',
                'Xoá thành công!',
                'success'
              )
            return true;
        }else{
            return false;
        }
      })
 }