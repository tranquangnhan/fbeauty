$("#add-field").click(function() {
    $("#some_div").append(`
    <div class=" box-detail"  >
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
    $(this).closest(".input-block").remove();
});