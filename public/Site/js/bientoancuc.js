// URL //
const getNhanVienByIdCoSoUrl = 'nhanviencuacoso/'; // nhanviencuacoso/id
const getGioTheoThuUrl = 'getDataKhungGio/'; // getGio/{thu}
const postDatLichUrl = 'datLich/';
const rootUrlImage = '/Site/images/';
// URL //

const timeMoving = 100;
const lengthSlideBooking = $('.datlich-step').length;
const tranlatexRange = 100 / parseInt(lengthSlideBooking);
const maxStep = lengthSlideBooking - 1; // bắt đầu từ 0 => - 1

const elementDatePick = $('.date-click');
const attrOptionDate = 'data-option-date';
const attrValueDate = 'data-date';

const elementNhanVienPick = $('.picknhanvien');
const attrOptionNhanVien = 'data-option-nhanvien';
const attrValueNhanVien = 'data-nhanvien';
const classGetTextNhanVien = 'name-nhanvien';
const classClickedNhanVien = 'option-nhanvien';
const elementValueNhanVien = $('.value-nhanvien');

const attrOptionTime = 'data-option-time';
const attrValueTime = 'data-time';
const classError = 'fa-error';

const controlShortOne = $('[data-step=0]');
const controlShortTwo = $('[data-step=1]');
const controlShortThree = $('[data-step=2]');
const controlShortFour = $('[data-step=3]');
const boxSpinner = $('.box-spinner');
const step_1 = 0;
const step_2 = 1;
const step_3 = 2;
const step_4 = 3;

const elementPickCoSo = $('.pickcoso');
const attrOptionCoSo = 'data-option-coso';
const elementValueCoSo = $('.value-coso');
const attrValueCoSo = 'data-coso';

const elementListNhanVien = $('.list-nhanvien');

const elementValueTime = $('.value-time');

const trangThaiLichSanSang = 0;

var totalPriceDichVu = 0;

var todayDMY = moment().format('DD/MM/YYYY');

var todayYMD = moment().format('YYYY-MM-DD');

var currentTime = moment().format('HH:mm:ss');

var gioiHanDatLich = moment().add(10, 'minutes').format('HH:mm:ss');

var timeSelected;

var idCoSo;

var phoneNumber;

var soXuLiBatDongBo = 0;

var ngaySelected = todayDMY;

var nhanVienSelected = 0;

var timeSelected = '';

var khungGio;

var objectNhanVienSelected = {
    'id': '0',
    'ten': 'Spa chọn chuyên viên giúp bạn',
    'imgUrl': 'avatar-default.png'
};

var activeStep;
var nextStep;
