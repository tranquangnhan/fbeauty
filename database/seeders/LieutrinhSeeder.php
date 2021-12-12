<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class LieutrinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lieutrinh')->delete();
        DB::table('lieutrinhchitiet')->delete();

        DB::table('lieutrinh')->insert([
            ['id'=>1,'idnhanvien'=>1,'idkhachhang'=>6,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>2,'idnhanvien'=>2,'idkhachhang'=>5,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>3,'idnhanvien'=>3,'idkhachhang'=>4,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>4,'idnhanvien'=>4,'idkhachhang'=>3,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu' =>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>5,'idnhanvien'=>5,'idkhachhang'=>2,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>6,'idnhanvien'=>6,'idkhachhang'=>1,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>7,'idnhanvien'=>1,'idkhachhang'=>2,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>8,'idnhanvien'=>2,'idkhachhang'=>3,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>9,'idnhanvien'=>3,'idkhachhang'=>4,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>10,'idnhanvien'=>4,'idkhachhang'=>5,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>11,'idnhanvien'=>5,'idkhachhang'=>6,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>12,'idnhanvien'=>6,'idkhachhang'=>1,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>13,'idnhanvien'=>1,'idkhachhang'=>4,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>14,'idnhanvien'=>2,'idkhachhang'=>2,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>15,'idnhanvien'=>3,'idkhachhang'=>3,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>16,'idnhanvien'=>4,'idkhachhang'=>5,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>17,'idnhanvien'=>5,'idkhachhang'=>6,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>18,'idnhanvien'=>6,'idkhachhang'=>1,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>19,'idnhanvien'=>1,'idkhachhang'=>2,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>20,'idnhanvien'=>2,'idkhachhang'=>3,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>21,'idnhanvien'=>3,'idkhachhang'=>4,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['id'=>22,'idnhanvien'=>4,'idkhachhang'=>5,'ngaybatdau'=>'1635699600','dukienketthuc'=>'1637341200','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
        ]);
        DB::table('lieutrinhchitiet')->insert([
            ['id'=>1,'idlieutrinh' => 1, 'iddichvu'=> 1,'idnhanvien'=> 1, 'ghichu' =>'Bước 1: Kiểm tra tình trạng da trong quy trình chăm sóc da cơ bản tại spa mà bạn nên áp dụng vào cơ sở của mình hoặc tham khảo để lựa chọn spa sử dụng dịch vụ. Giá dịch vụ cũng phụ thuộc rất nhiều vào chất lượng của từng spa nên bạn cần lựa chọn kỹ lưỡng để chăm sóc làn da của mình nhé!', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang1.jpg'],
            ['id'=>2,'idlieutrinh' => 2, 'iddichvu'=> 2,'idnhanvien'=> 2, 'ghichu' =>'Các bước chuẩn bị xăm, phun môi:

            Chọn màu môi, dáng môi
            Tiêm 1-2 mũi thuốc tê vào môi
            Đợi 15 phút cho ngấm thuốc tê
            Kỹ thuật viên sẽ tiến hành công đoạn xăm, phun môi
            Kỹ thuật xăm, phun môi:

            Chiếc máy phun to bằng cây bút bi lớn có gắn đầu kim nhỏ như sợi cước.
            Từng mũi kim tỳ lên môi đâm vào lớp da mỏng mảnh trên môi để tô vào lớp mô bên trong một lớp màu.
            Mũi kim nhỏ do vậy các đường viền môi và các điểm màu trên môi cũng mảnh, mềm mại và mịn màng.
            Lưu ý khi xăm, phun môi:

            Màu môi không căn cứ vào thị hiếu thời trang mà được căn cứ vào màu da của từng người
            Không nên chọn những màu quá đỏ, sẽ khó đánh loại son khác nếu chúng ta muốn có chút thay đổi. Xu hướng chung là chọn gram màu nhẹ nhàng
            Không nên chọn màu có thiên hướng quá cam vì sau khi ngả màu, màu môi sẽ hơi vàng
            Nên chọn màu đỏ không pha để khi xuống màu nó sẽ thành đỏ hoặc hồng.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang2.jpg'],
            ['id'=>3,'idlieutrinh' => 3, 'iddichvu'=> 3,'idnhanvien'=> 3, 'ghichu' =>'Bước 1: Làm sạch

            Bước đầu tiên này nên thực hiện vào mỗi buổi sáng và buổi tối.

            Tốt nhất nên tìm loại sửa rửa mặt chứa đầy đủ các loại vitamin nuôi dưỡng da, chẳng hạn như vitamin A, vitamin B2, vitamin B12 và vitamin E.

            Bước 2: Tẩy tế bào chết

            Chất tẩy tế bào chết không nên làm hàng ngày. Thay vào đó, 1–3 lần mỗi tuần là đủ để loại bỏ tế bào chết trên da mà không gây kích ứng.

            Vào những ngày bạn không tẩy tế bào chết, chỉ cần sử dụng sữa rửa mặt của bạn.

            Bước 3: Sử dụng toner - nước cân bằng

            Toner là một trong những bước phổ biến nhất không thể thiếu khi chăm sóc da. Toner có thể giúp se khít lỗ chân lông, loại bỏ tạp chất và cân bằng lại làn da của bạn.

            Các lựa chọn tốt nhất là làm rõ các loại toner giúp cân bằng lại độ pH của bạn. Bạn có thể lưu ý một số loại chiết xuất từ tự nhiên như nho, đào, trà xanh...

            Viện Y tế Quốc gia Hoa kỳ cho biết, việc sử dụng phiên bản đường uống của chiết xuất hạt nho (proanthocyanidin) đã cho thấy cải thiện tình trạng nám da, nguyên nhân gây tăng sắc tố da.

            Bước 4: Dưỡng ẩm

            Ceramides là thành phần quan trọng cần tìm trong kem dưỡng ẩm.

            Cụ thể, hãy tìm phytoceramides, là những ceramides có nguồn gốc thực vật. Đây là những chất béo dạng sáp được tìm thấy tự nhiên trong da có khả năng giữ ẩm.

            Dầu jojoba là một thành phần dưỡng ẩm tuyệt vời khác giúp tăng cường sự trẻ hóa và bảo vệ chống lại các tác nhân gây hại từ môi trường.

            Còn serum về cơ bản là chất dưỡng ẩm cấp độ tiếp theo. Chúng cung cấp các thành phần hoạt tính sâu vào các lớp hạ bì. Bạn có thể sử dụng một vài giọt huyết thanh trên má, cằm, mũi và trán của bạn.

            Bước 5: Kem chống nắng

            SPF được khuyến nghị hàng ngày ở mọi lứa tuổi.

            Một lưu ý đó là bạn nên thoa một loại kem dưỡng bằng chất lỏng nhẹ trước ví dụ như huyết thanh, kem dưỡng ẩm, sau đó mới đến kem chống nắng.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang3.jpg'],
            ['id'=>4,'idlieutrinh' => 4, 'iddichvu'=> 4,'idnhanvien'=> 4, 'ghichu' =>'1. Bước 1: Làm sạch và sát khuẩn da mặt
            Đây là bước cơ bản cho tất cả các liệu trình chăm sóc và điều trị da liễu. Làm sạch da sẽ loại bỏ vi khuẩn trú ngụ trên da, hạn chế tối đa vi khuẩn xâm nhập sâu vào nang lông trong khi nặn mụn.
            Bước làm sạch này thường sử dụng:

            Tẩy trang: Dùng trong trường hợp trang điểm, chống nắng hoặc trường hợp da dầu, bụi bẩn cần làm sạch sâu.
            Sữa rửa mặt: Sử dụng sữa rửa mặt dịu nhẹ, phù hợp với làn da để loại bỏ bụi bẩn, bã nhờn, vi khuẩn.
            Thuốc sát trùng: Dùng trong một số trường hợp da có nguy cơ nhiễm trùng cao, thuốc sát trùng sẽ ngăn vi khuẩn từ bên ngoài xâm nhập vào gây nhiễm trùng.
            2. Bước 2: Vệ sinh dụng cụ nặn mụn
            Vệ sinh dụng cụ ở đây bao gồm rửa sạch, khử trùng tay, tiệt trùng các dụng cụ dùng trong quá trình nặn mụn.
            Tất cả các dụng cụ hay đồ dùng trong quá trình nặn mụn cần phải sạch sẽ, không có vi khuẩn. Vùng da khi nặn mụn là vết thương hở nên rất dễ bị nhiễm trùng, cần ngăn chặn mọi con đường xâm nhập của vi khuẩn.
            3. Bước 3: Xông hơi để mở lỗ chân lông
            Xông hơi cũng là bước quan trọng giúp các nang lông nở ra, quá trình lấy nhân mụn sẽ dễ dàng và ít đau hơn. Xông hơi cũng là cách loại bỏ bụi bẩn trong lỗ chân lông, giúp da sạch sẽ, thông thoáng và đàn hồi tốt hơn.
            Đối với những người có vết chai, xông hơi cũng là một cách giúp làm mềm các nốt mụn. Mụn nang thường có đầu mụn bị chai, khó tác động để lấy nhân mụn nên xông hơi nước nóng sẽ hỗ trợ quá trình lấy nhân mụn dễ dàng hơn.
            Thông thường, tại các trung tâm da liễu sẽ có các thiết bị chuyên dụng để xông hơi. Nguyên liệu sử dụng có thể là muối khoáng hoặc các loại thảo dược lành tính cho da.
            4. Bước 4: Nặn mụn cám
            Các bác sĩ da liễu có thể tự tay nặn hoặc dùng dụng cụ nặn mụn để lấy nhân mụn ra. Trong đó, phổ biến nhất là sử dụng que nặn mụn.
            Đầu nhọn của que lấy mụn sẽ dùng để châm đầu mụn, đầu tròn còn lại dùng để ấn xuống để đẩy nhân mụn ra ngoài. Thao tác nặn mụn sẽ dùng lực vừa phải để vừa đẩy nhân mụn ra ngoài mà không gây tổn thương nhiều cho da.
            5. Bước 5: Sát khuẩn và chăm sóc da sau mụn
            Sau khi nặn mụn, các chuyên gia, bác sĩ sẽ sát trùng vị trí mụn. Dung dịch thường được sử dụng là nước muối sinh lý hoặc các dung dịch sát khuẩn chuyên dụng như Povidine 10% để ngăn ngừa nhiễm trùng, nhiễm vi khuẩn.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang4.jpg'],
            ['id'=>5,'idlieutrinh' => 5, 'iddichvu'=> 5,'idnhanvien'=> 5, 'ghichu' =>'Thời gian thực hiện và các bước trong liệu trình Điều Trị Mụn Lưng tại Fbeauty
            Bước 1: Rửa và làm sạch các lớp bụi bẩn trên bề mặt da

            Bước 2: Tẩy tế bào chết giúp loại bỏ lớp tế bào già cội sần sùi thô ráp, đồng thời làm thông thoáng lỗ chân lông để các bước điều trị tiếp theo hiệu quả hơn.

            Bước 3: Xông hơi giúp giãn nở lỗ chân lông, làm bước đệm cho quá trình lấy nhân mụn tiếp theo.

            Bước 4: Hút mụn cám và loại bỏ bã nhờn ẩn sâu dưới lỗ chân lông

            Bước 5: Tiến hành lấy nhân mụn triệt để bằng các dụng cụ chuyên dùng, mỗi bộ dụng cụ chỉ sử dụng 1 lần duy nhất cho từng khách hàng

            Bước 6: Sát trùng bằng thuốc chuyên biệt cho liệu trình

            Bước 7: Đắp mặt nạ thuốc bắc giúp dịu vết mụn đỏ, kiểm soát bã nhờn.

            Bước 8: Thắp ánh sáng sinh học ức chế tuyến bã nhờn, hạn chế nhiễm trùng vết thương, giảm kích ứng da, làm diệu và giảm đau, phục hồi tế bào da hư tổn, kích thích tuần hoàn máu, tái tạo da.

            Bước 9: Phun oxy giúp làm sạch sâu, bổ sung dưỡng chất cần thiết nuôi dưỡng một làn da tươi sáng, khỏe mạnh từ bên trong đồng thời ngăn chặn mọi quá trình lão hóa', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang5.jpg'],
            ['id'=>6,'idlieutrinh' => 6, 'iddichvu'=> 1,'idnhanvien'=> 6, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>7,'idlieutrinh' => 7, 'iddichvu'=> 1,'idnhanvien'=> 1, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>8,'idlieutrinh' => 8, 'iddichvu'=> 2,'idnhanvien'=> 2, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>9,'idlieutrinh' => 9, 'iddichvu'=> 3,'idnhanvien'=> 3, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>9,'idlieutrinh' => 9, 'iddichvu'=> 4,'idnhanvien'=> 4, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>9,'idlieutrinh' => 9, 'iddichvu'=> 5,'idnhanvien'=> 5, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>10,'idlieutrinh' => 10, 'iddichvu'=> 6,'idnhanvien'=> 6, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>11,'idlieutrinh' => 11, 'iddichvu'=> 1,'idnhanvien'=> 1, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>12,'idlieutrinh' => 12, 'iddichvu'=> 2,'idnhanvien'=> 2, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>13,'idlieutrinh' => 13, 'iddichvu'=> 3,'idnhanvien'=> 3, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>14,'idlieutrinh' => 14, 'iddichvu'=> 4,'idnhanvien'=> 4, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>15,'idlieutrinh' => 15, 'iddichvu'=> 5,'idnhanvien'=> 5, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>16,'idlieutrinh' => 16, 'iddichvu'=> 6,'idnhanvien'=> 6, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>17,'idlieutrinh' => 17, 'iddichvu'=> 1,'idnhanvien'=> 1, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>18,'idlieutrinh' => 18, 'iddichvu'=> 2,'idnhanvien'=> 2, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>19,'idlieutrinh' => 19, 'iddichvu'=> 3,'idnhanvien'=> 3, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>19,'idlieutrinh' => 19, 'iddichvu'=> 4,'idnhanvien'=> 4, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>20,'idlieutrinh' => 20, 'iddichvu'=> 5,'idnhanvien'=> 5, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>21,'idlieutrinh' => 21, 'iddichvu'=> 6,'idnhanvien'=> 6, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
            ['id'=>22,'idlieutrinh' => 22, 'iddichvu'=> 6,'idnhanvien'=> 6, 'ghichu' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
            Bước đầu của quy trình phun xăm mí mắt để đảm bảo an toàn, khách hàng sẽ được rửa vệ sinh mắt bằng nước muối sinh lý. Đây là bước cần thiết, chuẩn bị cho quy trình phun xăm mí mắt được tốt hơn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 2: Làm sạch bằng mỡ kháng sinh
            Việc làm sạch mắt bằng mỡ kháng sinh sẽ giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng hơn.

            Bước 3: Bôi tê và gây ê nhẹ ngoài da
            Quy trình phun xăm mí mắt với gây tê là bước không thể thiếu giúp cho quy trình phun xăm mí mắt diễn ra suôn sẻ, nhẹ nhàng, không gây đau đớn.

            QUY TRÌNH PHUN XĂM MÍ MẮT HÀN QUỐC

            Bước 4: Phun mực xăm lên và viền mí

            Lúc này, chuyên viên phun xăm sẽ di một nét nhỏ theo đường viền mi mắt. Đây là bước quan trọng, đòi hỏi sự tinh tế cao trong suốt quy trình phun xăm mí mắt.
            Thời gian xăm mí mắt thường lâu hơn thời gian xăm mày, xăm môi vì mí mắt rất gần với mắt nên đòi hỏi kỹ thuật viên phải thật nhẹ nhàng, tỉ mỉ hơn để an toàn cho mắt. Thông thường thời gian phun (xăm) cả mí trên, mí dưới là 45 phút.', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang6.jpg'],
        ]);
    }
}
