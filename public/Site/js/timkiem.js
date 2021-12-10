const pathImg = 'uploads/';
let dataDichVu;
let dataSanPham;

let perpage = 6;
function phanTrang(){
    const value = document.getElementById('data').value;
    const parse = JSON.parse(value);
    dataDichVu = parse.dichvu;
    showDichVu(dataDichVu,perpage);
}
phanTrang()

function xemThem(){
    perpage +=3;
    if(perpage>(dataDichVu.length - 3)){
        document.getElementById('xemthembtn').innerHTML = `<button class="border border-dark p-2" style="width: 30%;background-color: black; color: #e87c7b;">&lt;&lt; Không còn dịch vụ nào &gt;&gt;</button>`
    }
    showDichVu(dataDichVu,perpage);
}

function showDichVu(data,perpage){
    const dichvu = data.slice(0,perpage);
    const dulieuResult = dichvu.reduce((total,value)=>{
        total +=`<div class="dichvu-item d-plex w-100">
        <div class="content-1">
            <div class="text-7 color-main-1">
                ${value.namedm}
            </div>

            <div class="text-8 mt-1">
               ${  formatTien(value.dongia - (value.dongia/100 * value.giamgia))} đ
            </div>

            <div class="img-1 mt-4">
                <a href="dich-vu/${value.slug}">
                    <img class="" src="${pathImg+value.img}" alt="">
                </a>
            </div>

            <div class="text-1 limit-text-row-1 mt-4">
                ${value.name}
            </div>

            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                ${value.motangan}
            </p>
        </div>
        <div class="w-100 text-center mb-4">
            <a href="javascript:void(0)">
                <button  class="btn-4 btn-modal-main" type-modal="modal-datlich" data-show="one">Đặt lịch</button>
            </a>
        </div>
    </div>`;
    return total;
    },'');
    document.getElementById('showdichvu').innerHTML = dulieuResult;
}



function showSanPham(data,perpage){
    const dichvu = data.slice(0,perpage);
    const dulieuResult = dichvu.reduce((total,value)=>{
        total +=`<div class="dichvu-item d-plex w-100">
        <div class="content-1">
            <div class="text-7 color-main-1">
                ${value.namedm}
            </div>

            <div class="text-8 mt-1">
               ${  formatTien(value.dongia - (value.dongia/100 * value.giamgia))} đ
            </div>

            <div class="img-1 mt-4">
                <a href="dichvu/${value.slug}">
                    <img class="" src="${pathImg+value.img}" alt="">
                </a>
            </div>

            <div class="text-1 limit-text-row-1 mt-4">
                ${value.name}
            </div>

            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                ${value.motangan}
            </p>
        </div>
        <div class="w-100 text-center mb-4">
            <a href="javascript:void(0)">
                <button  class="btn-4 btn-modal-main" type-modal="modal-datlich" data-show="one">Đặt lịch</button>
            </a>
        </div>
    </div>`;
    return total;
    },'');
    document.getElementById('showdichvu').innerHTML = dulieuResult;
}

function formatTien(tien){
    return Number(tien).toLocaleString().replaceAll(",", ".");
}


