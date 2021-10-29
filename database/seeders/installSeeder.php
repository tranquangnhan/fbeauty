<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class installSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coso')->insert([
            ['name'=>'Cơ sở 1','diachi'=> 'Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh', 'tinh'=>'4', 'quan'=>'43', 'huyen'=>'1343'],
            ['name'=>'Cơ sở 2','diachi'=> '778/B1 Nguyễn Kiệm, Phường 3, Phú Nhuận, Thành phố Hồ Chí Minh', 'tinh'=>'4', 'quan'=>'43', 'huyen'=>'1343']
        ]);
        DB::table('danhmuc')->insert([
            ['id' => 1, 'name'=>'Chăm sóc da mặt', 'slug'=> Str::slug('Chăm sóc da mặt', '-'), 'loai'=>'1'],
            ['id' => 2, 'name'=>'Điều trị mụn, sẹo', 'slug'=> Str::slug('Điều trị mụn, sẹo', '-'), 'loai'=>'1'],
            ['id' => 3, 'name'=>'Dịch vụ trị nám, tàn nhang', 'slug'=> Str::slug('Dịch vụ trị nám', '-'), 'loai'=>'1'],
            ['id' => 4, 'name'=>'Làm trẻ hóa da', 'slug'=> Str::slug('Làm trẻ hóa da', '-'), 'loai'=>'1'],
            ['id' => 5, 'name'=>'Dịch vụ massage', 'slug'=> Str::slug('Dịch vụ massage', '-'), 'loai'=>'1'],
            ['id' => 6, 'name'=>'Dịch vụ giảm béo', 'slug'=> Str::slug('Dịch vụ giảm béo', '-'), 'loai'=>'1'],
            ['id' => 7, 'name'=>'Làm đẹp', 'slug'=> Str::slug('Làm đẹp', '-'), 'loai'=>'2'],
            ['id' => 8, 'name'=>'Trắng da', 'slug'=> Str::slug('Trắng da', '-'), 'loai'=>'3'],
        ]);
        DB::table('dichvu')->insert([
            ['name'=>'Xăm Chân Mày', 'slug' => Str::slug('Xăm Chân Mày'), 'img'=>'xam_chan_may.jpg', 'giamgia'=> 1, 'iddm'=> 1, 'motangan'=>'Xăm chân mày là hình thức dùng mũi kim thẩm mỹ đưa một lượng chất, mực tạo màu vào dưới da chân mày. ', 'dongia'=>2000000, 'noidung'=>'Xăm chân mày là hình thức dùng mũi kim thẩm mỹ đưa một lượng chất, mực tạo màu vào dưới da chân mày. Bạn có thể hình dung đây là phương pháp tương tự như việc xăm tattoo lên cơ thể vậy. Chuyên viên sẽ vẽ khung chân mày trước sau đó sử dụng kim chuyên dụng đưa mực xuyên sâu qua da để hoàn thiện theo khuôn chân mày. ', 'trangthai'=> 1],
            ['name'=>'Spa Điều Trị Mụn', 'slug' => Str::slug('Spa Điều Trị Mụn'), 'img'=>'dieu_tri_mun.jpg', 'giamgia'=> 1, 'iddm'=> 1, 'motangan'=>'Ở trên đã giới thiệu về phun xăm thẩm mỹ chân mày, môi rồi phải không? Nhưng chắc chắn nhiều bạn cũng sẽ không quan tâm nhiều bằng dịch vụ spa này đâu đúng không? ', 'dongia'=>4000000, 'noidung'=>'Ở trên đã giới thiệu về phun xăm thẩm mỹ chân mày, môi rồi phải không? Nhưng chắc chắn nhiều bạn cũng sẽ không quan tâm nhiều bằng dịch vụ spa này đâu đúng không? Đó là điều trị mụn như thế nào an toàn nhất, chất lượng nhất cho làn da cũng như sức khỏe của mình. Vì hiện nay xã hội phát triển và quá nhiều thứ trong không khí bị ô nhiễm mà làn da lại “được hưởng” một cách trực tiếp nhất hằng ngày, hằng giờ, chính vì thế mụn rất dễ được sinh ra. Vậy là cách nào để đến với dịch vụ spa và chọn đúng, chuẩn phương pháp điều trị mụn để tránh tiền mất tật mua? An tâm bên Miss Tram đều có gợi ý cho bạn sau đây.

            Dịch vụ điều trị mụn phù hợp cho từng loại mụn, loại da tại Miss Trâm

            Thoa kem trị mụn, uống thuốc kháng sinh
            Phương pháp này có ưu điểm là giúp giảm mụn khá nhanh nếu da bạn phù hợp với kem trị mụn hay cơ thể thích ứng với thuốc kháng sinh.

            Nhược điểm:

            + Sau khi ngưng kem thoa hoặc hết liệu trình uống thuốc mụn sẽ tái lại nặng hơn ban đầu.

            + Da dần kháng lại với kem tri mụn nếu thoa duy trì trong thời gian quá lâu



            + Uống thuốc kháng sinh khiến cơ thể bạn mệt mỏi, thân nhiệt nóng, môi khô bong tróc và ảnh hưởng đến sức khỏe nếu dùng thuốc kháng sinh quá thời gian quy định.

            + Note: Một trong số các nguyên nhân bị mụn đó chính là da bị chứa và tích tụ quá nhiều các độc tố, vậy thì việc thải độc tố ra cho da cực kì quan trọng. Miss Trâm có liệu trình thải độc tố vậy thì đánh giá về liệu trình ấy như thế nào? Có tốt không? Bạn cùng tham khảo tại đây.

            Điều trị mụn bằng công nghệ kích hoạt vi điểm Laser CO2 Fractional
            Đối với phương pháp này thì có khá nhiều các ưu điểm cần đề cập?

            + Công nghệ kích hoạt vi điểm Laser Fractional CO2 là bước đột phá công nghệ trong lĩnh vực phục hồi và điều trị da mụn – sẹo rỗ. Với bước sóng 10.600 nm có khả năng tác động sâu vào lớp hạ bì mà không gây xâm lấn vùng da lành xung quanh.



            + Loại bỏ vi khuẩn gây mụn, điều tiết chất nhờn trên da và kháng khuẩn.



            + Laser CO2 giúp kích thích mô tăng sinh collagen làm đầy vùng da mụn sẹo, đồng thời cải thiện các vấn đề da mặt, giúp da săn chắc, giảm vết thâm nám, vết nhăn, da mịn màng và tươi trẻ hơn..

            + Không chỉ điều trị sạch mụn, thâm mà còn giúp da trắng hồng mịn màng, se khít lỗ chân lông và tái tạo da sáng khỏe.

            + Mức độ mụn tái phát thấp và hạn chế tối đa tình trạng mụn viêm khi tái phát.

            Nhược điểm:

            + Hiệu quả điều trị phụ thuộc rất nhiều vào thế hệ máy của từng cơ sở và sản phẩm điều trị sau khi kích hoạt vi điểm.

            + Chi phí điều trị khá cao so với điều trị mụn thông thường.

            Điều trị mụn bằng công nghệ Green Laser/Blue Light, Công nghệ Oxy Jet, Công nghệ Nano Skin, Công nghệ Bio Light
            Ưu điểm:

            + Giải quyết được tình trạng mụn trong thời gian ngắn, ánh sáng sinh học giúp phá hủy cồi mụn, tiêu diệt vi khuẩn, giải tỏa tắc nghẽn lỗ chân lông – nguồn sản sinh ra mụn, giảm viêm.

            + Dễ dàng kiểm soát những nốt mụn vừa mới hình thành

            + Chi phí điều trị khá rẻ, phù hợp với mọi độ tuổi

            Nhược điểm: Chỉ giải quyết được tình trạng mụn trên bề mặt da. Bạn nên duy trì chăm sóc da thường xuyên để kiểm soát nốt mụn mới càng sớm càng tốt.', 'trangthai'=> 1],
            ['name'=>'Xăm Môi Truyền Thống', 'slug' => Str::slug('Xăm Môi Truyền Thống'), 'img'=>'xam_moi_truyen_thong.jpg', 'giamgia'=> 1, 'iddm'=> 1, 'motangan'=>'Thường thì đối với các tỉnh lẻ, không phải nằm thành phố lớn như Hồ Chí Minh, Hà Nội, Cần Thơ, Đà Nẵng thì phương pháp này được sử dụng khá nhiều, ', 'dongia'=>3000000, 'noidung'=>'Thường thì đối với các tỉnh lẻ, không phải nằm thành phố lớn như Hồ Chí Minh, Hà Nội, Cần Thơ, Đà Nẵng thì phương pháp này được sử dụng khá nhiều, vì với viêc cập nhật kiến thức, kỹ thuật và đầu tư máy móc ở các tỉnh của các chủ tiệm spa, thẩm mỹ viện hầu như không có. Với xăm môi truyền thống, chuyên viên sẽ dùng kim đâm xuyên qua lớp sừng, sau đó thoa đều mực xăm lên hoặc lấy mũi kim nhúng vào mực trước rồi lăn lên da. Màu sắc sau khi xăm môi sẽ đậm hơn, mực xăm lại không được tự nhiên cho lắm, khi nhìn vào dễ phát hiện ra dấu tích thẩm mỹ.', 'trangthai'=> 1],
            ['name'=>'Spa Điều Trị Mụn Lưng', 'slug' => Str::slug('Spa Điều Trị Mụn Lưng'), 'img'=>'dieu_tri_mun_lung.jpg', 'giamgia'=> 1, 'iddm'=> 1, 'motangan'=>'Điều trị mụn lưng, đọc đến đây có bạn sẽ hỏi sao không gộp vào điều trị mụn ở trên? Không vì điều trị mụn lưng nó thành một mảng khác so với điều trị mụn ở trên là nói về điều trị mụn trên mặt rồi. ', 'dongia'=>3500000, 'noidung'=>'Điều trị mụn lưng, đọc đến đây có bạn sẽ hỏi sao không gộp vào điều trị mụn ở trên? Không vì điều trị mụn lưng nó thành một mảng khác so với điều trị mụn ở trên là nói về điều trị mụn trên mặt rồi. Vậy thì hãy cùng khám phá xem có bao nhiêu cách, công nghệ điều trị mụn lưng lại dịch vụ spa làm đẹp Miss Trâm nào?

            Dịch vụ spa điều trị mụn lưng

            Kiểm Soát Mụn – Viêm Nang Lông Với Ánh Sáng Sinh Học Omega Light
            Ngày nay, sự phát triển của y học và công nghệ hiện đại đã cho ra đời nhiều phương pháp trị mụn lưng – viêm nang lông nhanh chóng. Trong đó, điều trị mụn lưng bằng ánh sáng sinh học Omega Light đã được FDA (Mỹ) chứng nhận về hiệu quả và độ an toàn.

            Kiểm Soát Mụn – Viêm Nang Lông Với Laser CO2 Fractional
            Phương pháp loại bỏ tuyệt đối tình trạng mụn, viêm nang lông, thâm đen, mang lại hiệu quả cao, kể cả đối với tình trạng thâm mụn lưng lâu năm. Công nghệ laser Fractionla Co2 được FDA Hoa Kỳ chứng nhận về độ an toàn và hiệu quả đối với người cần điều trị.

            Hiệu quả tái tạo làn da, kích thích tăng sinh collagen, trẻ hóa làn da giúp làn da trắng hồng tự nhiên. Thời gian liệu trình điều trị mụn, thâm, viêm nang lông ngắn hơn nhiều so với các phương pháp khác. Không cần kiêng khem, không mất thời gian nghỉ dưỡng sau điều trị.

            Kiểm Soát Mụn – Viêm Nang Lông Với Công nghệ Phi Kim/Lăn Kim
            Phương pháp phi kim, lăn kim chính là sử dụng các đầu kim có kích thước siêu nhỏ để tạo nên những tổn thương giả siêu nhỏ trên vùng da lưng, những vi điểm này sẽ kích thích cơ chế làm lành tự nhiên của da, từ đó làn da được tái tạo, tăng sinh collagen gấp 1000% lần, cũng như giúp làn da hấp thụ dưỡng chất lên tới 3000% lần so với các liệu pháp chăm sóc da thông thường.

            Phi kim, lăn kim vi điểm còn góp phần kích thích tái tạo biểu bì, tăng sinh Keratinocyte (lớp sừng của da) và các tế bào gốc. Khi đó, lớp Keratin được đẩy lên trên và hình thành một lớp gọi là thượng bì bảo vệ cơ thể dưới tác động của môi trường xung quanh.

            ', 'trangthai'=> 1],
            ['name'=>'Spa Trẻ Hóa Da Tự Nhiên', 'slug' => Str::slug('Spa Trẻ Hóa Da Tự Nhiên'), 'img'=>'tre_hoa_da.jpg', 'giamgia'=> 1, 'iddm'=> 1, 'motangan'=>'Da bạn bị lão hóa? Theo thời gian xã hội phát triển thì tỷ lệ ngược với da của bạn lão hóa càng nhanh và càng trẻ hóa độ tuổi ra. Vậy làm thế nào? Chả nhẽ cứ là đi phẩu thuật hay sao?', 'dongia'=>3000000, 'noidung'=>'Da bạn bị lão hóa? Theo thời gian xã hội phát triển thì tỷ lệ ngược với da của bạn lão hóa càng nhanh và càng trẻ hóa độ tuổi ra. Vậy làm thế nào? Chả nhẽ cứ là đi phẩu thuật hay sao? Không không,… Bí quyết cho bạn dịch vụ spa làm đẹp trẻ hóa da tự nhiên từ Miss Tram như sau:

            Dịch vụ spa trẻ hóa da tự nhiên tại thẩm mỹ viện miss tram

            Trẻ hóa da bằng phương pháp Thay da hóa học
            Thay da hóa học là một cách khác tái tạo bề mặt da. Các chuyên gia thẩm mỹ dùng một dung dịch và thoa lên da trong một khoảng thời gian nhất định, sau đó làn da bên ngoài tróc đi và kích thích tế bào da mới xuất hiện.

            Trẻ hóa da bằng PRP
            PRP (Platelet Rich Plasma) còn được gọi là phương pháp trẻ hóa lấy máu tự thân. Trong tiểu cầu của huyết tương trong máu có chứa các tế bào gốc có khả năng làm mới chính mình và kích thích sản sinh thêm các tế bào mới. Huyết tương sau khi được tách ra khỏi máu bằng máy li tâm sẽ được kích thích để sản sinh ra thêm các tế bào gốc. Sau đó, huyết tương sẽ được cấy vào tế bào da theo phương pháp lăn kim máy.

            Trẻ hóa da bằng Laser
            Laser là phương pháp thông dụng ở nhiều cơ sở thẩm mỹ hiện nay khi sử dụng tia sóng ánh sáng tác động vào da như laser CO2, laser Toning, laser Fraxel Repair… giúp loại bỏ các lớp da bên ngoài, kích thích vùng da bên dưới tạo ra collagen, giúp da săn chắc hơn.

            Trẻ hóa da với Công nghệ HiFu S+ (High Intensity Focus Ultrasound)
            Công nghệ Hifu là công nghệ duy nhất hiện nay sử dụng bước sóng có thể đi vào tới độ sâu 3.0-4.5mm dưới bề mặt da. Đây được coi là khu vực sản sinh nhiều nhất collagen và elastin – các tế bào giúp da săn chắc, căng tràn và tươi trẻ. Sau khi đi sâu vào tận cùng lớp hạ bì, sóng siêu âm hội tụ cường độ cao sẽ phát tán năng lượng, săn gọn các mô cơ.', 'trangthai'=> 1],

        ]);

        DB::table('nhanvien')->insert([
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'ngoanhquoc@gmail.com','password'=> '$2y$10$iimuFe7voEEthMTFQvRBX.hk1XrL3O1W7lXTZPCxktAIWkuEmY692','role'=>1 ,'active'=>1 ,'name'=>'Ngô Anh Quốc', 'img'=>'c89bd998269ccac2938d.jpg', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'c89bd998269ccac2938d.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'longnh.2401@gmail.com','password'=> bcrypt('123123123'),'role'=>1 ,'active'=>1 ,'name'=>'Long', 'img'=>'a2c0894d9a3e77602e2f.jpg', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'a2c0894d9a3e77602e2f.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'tuong2712@gmail.com','password'=> '$2y$10$nlRY7DRJfQQLSbI0aV7h9usw0waQxL9uGbNFQChi.06.YIigQCC3q','role'=>1 ,'active'=>1 ,'name'=>'Tưởng', 'img'=>'7e64a9d2201ccc42950d.jpg', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'7e64a9d2201ccc42950d.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'nhanvien@gmail.com','password'=> bcrypt('123123123'),'role'=>1 ,'active'=>1 ,'name'=>'nhân viên', 'img'=>'', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'quoc.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'tranquangnhan1606@gmail.com','password'=> '$2y$10$Pmr.7sQX/HnGhwq8ZzlOPuZ9P.yBZ1XSxoRINN4arsLVGR6.6lxf6','role'=>1 ,'active'=>1 ,'name'=>'Nhân', 'img'=>'88e5bb095c89b1d7e898.jpg', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'88e5bb095c89b1d7e898.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'thuhuyendev01@gmail.com','password'=> '$2y$10$Pmr.7sQX/HnGhwq8ZzlOPuZ9P.yBZ1XSxoRINN4arsLVGR6.6lxf6','role'=>1 ,'active'=>1 ,'name'=>'Thu Huyền', 'img'=>'huyen.jpg', 'namsinh'=> 2001,'gioitinh'=> 0, 'sdt'=> '012345678', 'avatar'=>'huyen.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-10-03 20:56:18','updated_at'=> NULL],
        ]);
        DB::table('giamgia')->insert([
            ['name'=>'MAXSALE150','ma'=>'FB01', 'number'=>25000,'max'=> 150000,'loai'=>1 ,'ngaytao'=>'10252021' ,'ngayhethan'=>'10252029','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['name'=>'MAXSALE250','ma'=>'FB02', 'number'=>250000,'max'=> 950000,'loai'=>0 ,'ngaytao'=>'10252021' ,'ngayhethan'=>'10252029','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['name'=>'MAXSALE200','ma'=>'FB03', 'number'=>150000,'max'=> 200000,'loai'=>1 ,'ngaytao'=>'10252021' ,'ngayhethan'=>'10252029','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
        ]);
        DB::table('khachhang')->insert([
            ['name' => 'Long', 'sdt'=> '0965286055','email'=>'long@gmail.com','password' => bcrypt('123123'), 'active' => 1, 'img' => 'a2c0894d9a3e77602e2f.jpg'],
            ['name' => 'Nhân', 'sdt'=> '0965286056','email'=>'nhan@gmail.com', 'password' => bcrypt('123123'), 'active' => 1, 'img' => '88e5bb095c89b1d7e898.jpg'],
            ['name' => 'Ly Ly', 'sdt'=> '0965286057', 'email'=>'lyly@gmail.com','password' => bcrypt('123123'), 'active' => 1, 'img' => 'khachhang1.jpg'],
            ['name' => 'Hương Hương', 'sdt'=> '0965286058', 'email'=>'huonghuong@gmail.com', 'password' => bcrypt('123123'), 'active' => 1, 'img' => 'khachhang5.jpg'],
            ['name' => 'Thảo', 'sdt'=> '0965286059', 'email'=>'thao@gmail.com', 'password' => bcrypt('123123'), 'active' => 1, 'img' => 'khachhang6.jpg'],
            ['name' => 'Thảo Mai', 'sdt'=> '0965286060', 'email'=>'thaomai@gmail.com', 'password' => bcrypt('123123'), 'active' => 1, 'img' => 'khachhang7.jpg']
        ]);
        DB::table('blog')->insert([
            ['iddm' => '8', 'img' => 'dieu_tri_mun_uc_che.jpg', 'name' => 'DR.Seoul trị và ức chế mụn VAS 4.0 cho da mụn và nhạy cảm', 'slug' => Str::slug('DR.Seoul trị và ức chế mụn VAS 4.0 cho da mụn và nhạy cảm', '-'),'motangan'=>'Seoul Trị và ức chế Mụn VAS 4.0 – Một trong những liệu trình chăm sóc và điều trị mới nhất dành cho những khách hàng gặp phải vấn đề mụn tại Seoul Spa.', 'noidung' => 'Ưu điểm của liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0
            Với sự nâng cấp công nghệ nhằm bắt kịp với xu hướng thẩm mỹ trên thế giới, liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0 tỏ ra vô cùng vượt trội và phù hợp với nhiều khách hàng tại Seoul Spa bởi:

            Có khả năng ngăn chặn tối đa nguy cơ xuất hiện mụn trên da
            Chúng ta đều biết rằng bã nhờn và bụi bẩn gây bít tắc lỗ chân lông trong thời gian dài có thể dẫn tới việc xuất hiện mụn và các vấn đề về da. Chính vì vậy mà liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0 tỏ ra vô cùng hiệu quả khi giải quyết tận gốc vấn đề này ngay từ đầu.

            Khách hàng lựa chọn liệu trình điều trị mụn này có thể loại bỏ tối đa nguy cơ gây ra mụn nhờ bước hút dầu, xông hơi mặt để thải độc và làm sạch toàn bộ bề mặt và cặn bẩn khỏi những vị trí lỗ chân lông trên da.

            Liệu trình điều trị an toàn, không gây đau
            Hầu hết những liệu trình điều trị mụn thường thấy sẽ lấy nhân mụn và gây ra những vết thương, khiến khách hàng cảm thấy đau đớn khó chịu trong suốt quá trình thực hiện.

            Nếu lựa chọn DR. Seoul Trị và ức chế Mụn VAS 4.0, khách hàng không phải lo lắng về nguy cơ viêm nhiễm hay đau đớn bởi chuyên viên kỹ thuật sẽ nhanh chóng tiến hành sát khuẩn kỹ càng bề mặt da và ủ tê thuốc tê. Ngoài ra sau khi lấy nhân mụn cũng sẽ điện cam da lại thêm một lần nữa để giảm sưng và kháng viêm tuyệt đối.

            Liệu trình điều trị toàn diện với đầy đủ các bước
            Liệu trình điều trị toàn diện với đầy đủ các bước
            Tương thích với nhiều đối tượng khách hàng
            Chính vì vậy mà liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0 tại Seoul Spa được nâng cấp bằng công nghệ mới nhất, phù hợp để sử dụng cho nhiều đối tượng khách hàng khác nhau, điều trị đa dạng các loại mụn, tương thích với nhiều loại da nhờ việc điều chỉnh linh hoạt trong quá trình phi kim dưỡng chất cho da. Đây là thế mạnh của liệu pháp trị mụn công nghệ cao mà các cơ sở thẩm mỹ chăm sóc da thông thường không thể sánh kịp.

            Không cần lo ngại về tình trạng tổn thương da sau khi trị mụn
            Với quy trình điều trị chặt chẽ và đầy đủ các bước theo nguyên tắc khoa học, khách hàng có thể tránh khỏi nguy cơ bị thâm da hoặc tổn thương da do phi kim dưỡng chất nhờ chăm sóc và xử lý bề mặt da bằng dung dịch sát khuẩn và dưỡng chất một cách kịp thời.

            Sau khi thực hiện liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0, tốc độ hồi phục của da khỏi những tổn thương do điều trị mụn cũng được rút ngắn một cách đáng kể. Đồng thời tăng cường khả năng kháng khuẩn cũng như hấp thụ dưỡng chất của làn da nhờ mặt nạ phục hồi và mặt nạ ánh sáng sinh học. Liệu trình điều trị thực hiện nhanh gọn, mang lại hiệu quả rõ rệt và lâu dài dành cho khách hàng khi lựa chọn trị mụn công nghệ cao tại Seoul Spa.

            Những ai nên thực hiện liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0?
            Ra đời với mục đích điều trị và ức chế mụn, liệu trình DR.Seoul đặc biệt phù hợp với:

            Những khách hàng gặp phải tình trạng mụn dai dẳng, mụn kéo dài không thể điều trị dứt điểm.
            Những khách hàng có làn da nhạy cảm, không thích hợp sử dụng những liệu pháp điều trị mụn thông thường.
            Khách hàng gặp phải tình trạng mụn ẩn, khó loại bỏ hết nhân mụn từ sâu bên trong lỗ chân lông.
            Những khách hàng có nhu cầu ngăn ngừa mụn từ sớm để phòng tránh những tổn hại do mụn gây ra.
            Những đối tượng khách hàng cần điều trị mụn dứt điểm, thực hiện trong thời gian nhanh chóng nhưng sợ đau.
            Quy trình thực hiện DR. Seoul Trị và ức chế Mụn VAS 4.0
            Bước 1: Tẩy trang để loại bỏ đi những lớp trang điểm nhằm giúp da trở về trạng thái tự nhiên.

            Bước 2: Tẩy tế bào chết trên da nhằm làm sạch đi những tàn dư còn sót lại trước khi thực hiện điều trị.

            Bước 3: Rửa mặt bằng nước muối sinh lý.

            Bước 4: Xông hơi da trong khoảng 10 phút để lỗ chân lông nở rộng, dễ dàng làm sạch nhân mụn. Lưu ý không hút dầu trên da.

            Sát khuẩn bề mặt da trước khi điều trị
            Sát khuẩn bề mặt da trước khi điều trị
            Bước 5: Tiến hành sát khuẩn bề mặt làn da để tránh nguy cơ nhiễm trùng da.

            Bước 6: Lấy nhân mụn, tùy vào tình trạng da, loại mụn mà sẽ có phương pháp lấy nhân mụn khác nhau.

            Bước 7: Sát khuẩn lại thêm một lần nữa kèm theo điện cam để giảm sưng kháng viêm cho da sau khi lấy nhân mụn

            Bước 8: Đắp mặt nạ muối và Povidine trong thời gian từ 10 đến 15p giúp kháng khuẩn theo tỷ lệ 3:1 kết hợp xông lạnh để xoa dịu làn da, tránh kích ứng.

            Bước 9: Ủ tê da mặt từ 15 – 20 phút. Trong trường hợp khách hàng yêu cầu thì có thể lau thêm 1 lần Povidine trên da mặt tại những vùng ủ tê rồi mới tiến hành trị liệu mụn nếu như khách lo lắng về cảm giác đau.

            Bước 10: Tiến hành vô trùng đầu kim bằng dung dịch sát khuẩn trước khi tiến hành phi kim để loại bỏ hoàn toàn nguy cơ dị ứng với thuốc điều trị.

            Bước 11: Tiêm rải đều toàn bộ khuôn mặt và tập trung vào những vùng da bị mụn, mụn viêm để tăng cường hiệu quả trị liệu.

            Bước 12: Đi phi kim với vacxin mụn. Lưu ý mức độ đi kim sẽ tùy thuộc vào loại da của khách hàng cũng như tình trạng mụn cần trị liệu. Thường từ 0.5 -> 0,75 ở vùng trán, và từ 1 -> 2,5 tại vùng má. Sau khi phi kim ngay lập tức làm sạch bằng nước muối và thoa tinh chất để tránh nguy cơ thâm da do phi kim.

            Bước 13: Sau khi phi kim cần kết hợp đi búa lạnh và tiêm vacxin thêm 1 lần nữa để tăng cường hiệu quả thẩm thấu dưỡng chất vào da. Kết hợp với đắp mặt nạ và chiếu ánh sáng sinh học theo gói dịch vụ điều trị.

            Bước 14: Massage thư giãn đầu, cổ, vai gáy cho khách hàng sau thời gian dài thực hiện liệu trình

            Hướng dẫn chăm sóc da sau khi thực hiện liệu trình
            Sau khi thực hiện liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0, khách hàng nên chú ý thực hiện những điều sau đây để đảm bảo hiệu quả trị mụn cũng như giảm thiểu tối đa nguy cơ tổn thương da:

            Không rửa mặt bằng nước, sữa rửa mặt hay các sản phẩm sát khuẩn ngay sau khi thực hiện liệu trình bởi lúc này làn da vẫn còn bị tổn thương và để lại những vết thương hở. Thay vào đó, hãy lắng nghe và tuân thủ chỉ định của chuyên viên kỹ thuật trong quá trình chăm sóc da tại nhà.
            Hãy để những vết thương kéo da non tự nhiên, không dùng tay tác động lên những vị trí nặn mụn để tránh gây ra tổn thương và tạo ra sẹo tại những vùng da này.
            Tốt nhất là không sử dụng các loại mỹ phẩm trong thời gian phục hồi theo chỉ định, chỉ nên dùng một số sản phẩm dưỡng ẩm phù hợp và dịu nhẹ để xoa dịu làn da sau khi lấy nhân mụn.
            Phi kim da và đi tinh chất sẽ khiến da trở nên nhạy cảm và yếu hơn nhiều so với lúc bình thường. Vì vậy bạn nên chú trọng bảo vệ và che chắn da khỏi những yếu tố có hại như khói bụi, ánh nắng mặt trời một cách kỹ càng.', 'trangthai' => '1'],

            ['iddm' => '7', 'img' => 'LHA_tri_mun.jpg', 'name' => 'Bạn đã biết gì về LHA- ngôi sao trị mụn thế hệ mới', 'slug' => Str::slug('Bạn đã biết gì về LHA- ngôi sao trị mụn thế hệ mới', '-'),'motangan'=>'Để mà nói về hoạt chất trị mụn thì chẳng ai là không biết AHA, BHA,…vân vân mây mây. Thế nhưng có một hoạt chất nghe vừa lạ vừa quen,', 'noidung' => 'Để mà nói về hoạt chất trị mụn thì chẳng ai là không biết AHA, BHA,…vân vân mây mây. Thế nhưng có một hoạt chất nghe vừa lạ vừa quen, đó là LHA liệu bạn đã biết chưa? Nếu chưa thì hôm nay chúng mình sẽ cùng tìm hiểu sâu về em nó nha, các bạn đang tìm hoạt chất trị mụn “chân ái” càng không thể bỏ qua đâu.

            Giữa LHA và BHA có gì khác biệt?
            Chúng ta đều biết BHA- Beta Hydroxy Acid thường được biết đến dưới dạng Salicylic Acid, có thể tan trong dầu. Do đó tác động sâu đến lỗ chân lông, có khả năng “thanh lọc” da, đẩy những bụi bẩn trong lỗ chân lông lên bề mặt da để làm sạch. LHA cũng vậy, ẻm thuộc cùng họ hàng với BHA đấy chứ nhưng vẫn có một số khác biệt dưới đây nè!



            Tại sao nên dùng LHA?
            LHA – Capryloyl Salicylic Acid là một phái sinh dạng nhẹ hơn của BHA. Nhờ kích thước phân tử to, không thấm quá sâu xuống da nên ít gây kích ứng hơn so với BHA, đồng thời hòa tan bã nhờn, tẩy tế bào chết giảm bít tắc lỗ chân lông. Em nó cũng có tính kháng khuẩn, giảm sưng viêm hiệu quả như BHA, hơn nữa còn ức chế quá trình hình thành melanin gây đốm thâm đó.



            Những sản phẩm trị mụn chứa LHA
            La Roche-Posay Effaclar Duo [+] – kem trị mụn và chăm sóc da mụn hàng đầu tại Pháp. Duo [+] giúp trị mụn, giảm sưng đỏ với các nốt mụn, giảm vết thâm do mụn và bảo vệ da trước sự tấn công của vi khuẩn. Với hoạt chất LHA và Salicylic Acid, Duo [+] làm sạch sâu trong từng lỗ chân lông, ngăn chặn sự tích tụ của tế bào chết, lỗ chân lông thông thoáng giảm thiểu được tình trạng mụn đang có và ngăn mụn phát hình thành trở lại.
            Kem Trị Mụn La Roche-Posay Effaclar A.I 15ml được chỉ định cho việc điều trị mụn tại chỗ theo điểm với khả năng làm giảm tình trạng sưng viêm của mụn nhanh chóng. Hơn 60% người sử dụng đều nhận thấy nốt mụn cải thiện rõ rệt chỉ sau 48h.
            Như vậy Effaclar A.I phù hợp nhất cho những bạn bị nốt mụn sưng viêm lớn mọc rải rác không quá nhiều, hoặc những người thi thoảng lên mụn muốn tìm biện pháp chấm mụn nhanh chóng nhất có thể.

            Kem trị mụn La Roche-Posay Effaclar K+
            La Roche – Posay nghiên cứu và chỉ ra rằng, dưới tác động của yếu tố bên ngoài (tia tử ngoại, chất ô nhiễm, bụi bẩn…) theo thời gian da trải qua quá trình oxy hóa dẫn tới tình trạng lão hóa.

            Lần đầu tiên, La Roche -Posay kết hợp 3 thành phần LHA, Vitamin E, Carnosine.. giúp ngăn ngừa tình trạng oxi hóa, da mịn màng đồng thời giúp da được sạch sâu hơn, lỗ chân lông thu nhỏ, da sạch mụn, giảm tiết dầu là những điều kem dưỡng La Roche-Posay Effaclar K(+) mang lại cho làn da của bạn.

            Tips sử dụng
            Bắt đầu với tần suất và nồng độ thấp để da làm quen
            Dùng kem dưỡng ẩm kèm theo để tránh bị khô
            Không quên kem chống nắng vào ban ngày, chống nắng đủ lượng và có thoa lại trong ngày nhé
            Nếu gặp hiện tượng khô, bong tróc, mẩn đỏ, ngứa nên dừng lại để da nghỉ ngơi.
            ', 'trangthai' => '1'],

            ['iddm' => '6', 'img' => '1tang1.jpg', 'name' => 'MUA 1 TẶNG 1 BEST-SELLER', 'slug' => Str::slug('Ở ĐÂY BẠN MUA 1 ĐƯỢC THÊM TẶNG 1 BEST-SELLER, DANH SÁCH LÊN TỚI 50 SẢN PHẨM BEST-SELLER Các bạn tưởng Mint đã tổ chức sinh nhật xong rồi á?', '-'),'motangan'=>'Ở ĐÂY BẠN MUA 1 ĐƯỢC THÊM TẶNG 1 BEST-SELLER, DANH SÁCH LÊN TỚI 50 SẢN PHẨM BEST-SELLER','noidung'=>'Ở ĐÂY BẠN MUA 1 ĐƯỢC THÊM TẶNG 1 BEST-SELLER, DANH SÁCH LÊN TỚI 50 SẢN PHẨM BEST-SELLER
            Các bạn tưởng Mint đã tổ chức sinh nhật xong rồi á? Không phải đâu nha, lại có thêm 1 deal cực kì hấp dẫn với các bạn của Mint đây. Sinh nhật chúng mình mà người được nhận quà lại là các bạn đó.
            Mua sản phẩm nào được tặng thêm sản phẩm đó, từ drugstore cho tới highend không thiếu mức giá nào đâu nha.
            Chương trình diễn ra:

            Thời gian: 20/07 – 26/07
            Không áp dụng với thẻ tích điểm tại Mint, không áp dụng cùng các chương trình khuyến mại khác
            Áp dụng khi mua hàng tại các kênh mua hàng: trực tiếp, Fanpage Facebook, Instagram, Website (Không áp dụng tại: Shopee, Lazada, Tiki,..)
            ĐẶC BIỆT có chính sách SHIP siêu hời khi MUA 1 TẶNG 1:

            Đồng giá ship 10k với NỘI THÀNH (FREESHIP khi mua thêm 1 sản phẩm bất kì)
            Đồng giá ship 20k với NGOẠI THÀNH và các tỉnh khác (FREESHIP khi mua thêm 1 sản phẩm bất kì)
            DEAL MUA 1 TẶNG 1 số lượng có hạn nên các bạn mau tham khảo và nhanh đặt hàng nhé, check list của chúng mình ngay!!!

            Mascara Kush Milk 3ml: 120,000 <mua 1 tặng 1 BEST-SELLER >
            Mascara chứa các dưỡng chất tự nhiên giúp hàng mi của bạn dài gấp 95%.
            Mascara Kush: tạo cho bạn dáng lông mi vô cùng ưng ý và tự nhiên giúp bạn trông quyến rũ hơn khi sử dụng.
            Khi bạn chuốt loại mascara này sẽ có hai điều kì diệu xảy ra. Một ra từng sợi tơ nhỏ sẽ kéo dài hàng mi của bạn ra. Và hai là tinh chất cây gai dầu nuôi dưỡng và tạo điều kiện cho hàng mi của bạn khỏe mạnh và ít bị gãy hơn.
            Đầu chuốt với các lông chải mi được thiết kế hình trái tim, giúp lông mi trông dài và cong hơn, không bị vón cục và đặc biệt trông dày hơn cho lông mi bền đẹp suốt ngày, không lem trôi kể cả khi tiếp xúc với nước.
            Thành phần có chứa tinh dầu và dưỡng chất nuôi mi khỏe mạnh và tự nhiên hơn sau mỗi lần chải.

            Kem Chống Nắng L’Oreal UV Perfect Matte Fresh SPF50 15ml: 80,000 <Mua 1 tặng 1 BEST-SELLER >

            Kem chống nắng với công nghệ Activa-Cell, L’Oreal UV Perfect giúp bảo vệ các tế bào da, elastin và các sợi collagen khỏi tác hại của các gốc tự do. Đặc biệt, em này sở hữu công thức dành riêng cho làn da châu Á, đặc biệt là làn da dầu mụn, với dạng sữa màu xanh lá giúp cân bằng lại sắc tố trên da.

            Dầu Gội L’Oreal Elseve Extraordinary Oil 130ml: 69,000 <mua 1 tặng 1>
            Dòng dầu gội chăm sóc tóc chiết xuất từ 6 lolại hoa thiên nhiên nuôi dưỡng mái tóc mềm mại, suôn mượt. Thành phần dưỡng ẩm tốt cho tóc khô, xoăn và hư tổn. Nuôi dưỡng tóc chắc khỏe, bồng bềnh, giảm thiểu tình trạng rụng tóc.
            Sản phẩm có hương thơm dịu nhẹ của các loài hoa thiên nhiên sẽ tạo cho bạn cảm giác thư giãn. Thành phần an toàn, không gây kích ứng da đầu. Sản phẩm chuyên sâu cho mọi loại tóc, đặc biệt hiệu quả với mái tóc khô, xơ rối và hư tổn.

            Tẩy Trang Calliderm Lô Hội 500ml 250,000 <mua 1 tặng 1>
            Tẩy trang Calliderm Eau Micellaire – Organic Aloe Vera Juice là dòng nước tẩy trang dành cho da dầu, hỗn hợp. Chiết xuất từ nha đam có tác dụng làm sạch sâu bề mặt da, cùng thành phần giàu chất dinh dưỡng sẽ chăm sóc làn da hoàn hảo sau mỗi lần tẩy trang. Phiên bản này có mùi hương dịu nhẹ, dễ chịu.

            Dầu Tẩy Trang Kose White Cleansing Oil 230ml: 230,000 <mua 1 tặng 1>
            Kose White Cleansing Oil – Tẩy trang dạng dầu của thương hiệu mỹ phẩm nội địa Nhật Bản. Dầu Tẩy Trang Kosé Softymo White Cleansing Oil chiết xuất từ dầu cám gạo, một loại dầu có tỷ lệ khá cân bằng giữa Oleic và Linoleic Acid, do đó chất dầu lỏng, khá nhẹ. Dầu cám gạo được chứng minh có hiệu quả trong việc giữ ẩm, chống lão hóa và làm sáng da.

            Xà phòng For Butt Pelican (trái đào): 190,000 <mua 1 tặng 1>
            Xà phòng trái đào trị thâm mông Pelican sẽ làm sáng mịn, mềm mại và trị thâm mụn cho vùng hông và mông, giúp giải quyết các vấn đề về da như: Mông bị chai, sần sùi, thâm, nổi ban…
            Xà phòng trái đào trị thâm mông Pelican này với các thành phần có tác dụng tẩy da chết kết hợp hạt scrub (chiết xuất hạt đào, củ Konjac) và mật ong, hoa hồng lên men, nhóm AHA từ axit trái cây giúp loại bỏ lớp tế bào sừng già, tế bào chết, thô ráp, sần sùi trên bề mặt, hỗ trợ trị mụn cho vùng mông
            Ngoài ra em nó còn giữ độ ẩm cần thiết cho vùng mông nhờ có Chiết xuất hạt đào, lá đào, lá mận Nhật, quả kiwi, lá Atiso, gel lô hội giúp da trở nên mềm mịn. Dùng được cho cả cơ thể.

            Tẩy Trang Calliderm Rose 500ml: 250,000 <mua 1 tặng 1>
            Tẩy trang Calliderm Eau Micellaire – Organic Rose Extracts là dòng nước tẩy trang dành cho da khô.
            Tẩy trang chiết xuất từ hoa hồng chứa hàm lượng Vitamin B, C, D và E có tác dụng chống oxy hóa cho da, ngăn ngừa viêm lỗ chân lông, giảm mụn và làm sạch bụi bẩn trên da nhẹ nhàng.
            Tẩy trang Calliderm với công nghệ tiên tiến – Phân tử Micellar kép giúp làm sạch hoàn toàn lớp trang điểm, bụi bẩn, bã nhờn sâu trong lỗ chân lông mà không gây khô hại da, phù hợp với da thường tới khô.

            Serum The Ordinary Arbutin 2% + HA: 320,000 <mua 1 tặng 1>
            Serum The Ordinary Arbutin 2% + HA chứa Alpha-Arbutin hoạt động bằng cách ức chế quá trình oxy hóa một loại enzym chịu trách nhiệm sản xuất melanin gây sạm da, từ đó giúp da trắng sáng, giảm thâm mụn. Serum được sản xuất với nồng độ tối ưu 2%, kết hợp với 1% HA giúp chất serum ngấm sâu hơn, đem lại hiệu quả dưỡng sáng da tối ưu.

            Sữa Rửa Mặt Hada Labo Gokujyun Hatomugi Foaming Face Wash Tao Bọt: 250,000 <mua 1 tặng 1>
            • Dành cho: Da hỗn hợp dầu đến da dầu, da dầu mụn
            Sữa rửa mặt này vừa có hiệu quả cấp ẩm, vừa cải thiện độ sáng da. Thêm vào đó Hada Labo Gokujyun Hatomugi Foaming còn chứa chiết xuất hoa cúc, Dipotassium Glycyrrhizate và Amino Acid giúp làm giảm tình trạng sưng tấy của da mụn, làm sáng làn da bị sạm do dầu thừa.

            Serum Balance Hyaluronic Deep Moisture: 210,000 <mua 1 tặng 1>
            Serum Balance Hyaluronic Deep Moisture ĐƯỢC KIỂM NGHIỆM DA LIỄU nên cực kì phù hợp cho làn da NHẠY CẢM
            Trong 1 chai Serum Balance Hyaluronic Deep Moisture có chứa:
            5% HYLASOME EG10 – một chất vượt trội hơn hẳn Hyaluronic Acid với khả năng như sau
            – Giữ nước gấp 5 lần
            – Dưỡng ẩm gấp 5 lần trong vòng 24 tiếng
            – Chống ô xy hóa gấp 4 lần.

            Kẻ Mắt Isehan Heroine eyeliner Waterproof – màu đen: 250,000 <mua 1 tặng 1>
            Kẻ Mắt Kiss Me Heroine Make Smooth Liquid Eyeliner – luôn nằm trong top đầu các sản phẩm kẻ mắt được ưa thích nhất do người tiêu dùng bình chọn tại Nhật Bản. Kiss Me Heroine Make Smooth Liquid Eyeliner với thiết kế đầu siêu mảnh chỉ 0,1mm rất dễ dàng để các cô gái “biến hóa” cho đôi mắt thành những đường nét thanh mảnh, tự nhiên hay sắc nét, gợi cảm. Công thức chống nước cực tốt kể cả đi mưa hay đi biển.

            Serum Taiyou Aloe Hyaluronic Acid 10ml: 190,000 <mua 1 tặng 1>
            Đây là serum cấp nước “thuần chủng” 100% Hyaluronic Acid đó. Một giọt mang vác gấp 1000 lần lượng nước đưa vào da, giúp da căng mọng, đàn hồi, đặc biệt giảm cả nếp nhăn nông do bề mặt da ngậm nước căng tràn sức sống.
            Serum Taiyou Aloe Hyaluronic Acid sử dụng 1g muối Hyaluronic Acid Na, vốn là chất có phân tử nhỏ hơn HA bình thường rất nhiều do đó cho khả năng thẩm thấu vào da sâu hơn, cấp nước hiệu quả hơn.

            Son Dưỡng Môi Nuxe Reve de Miel Lip Moisturizing Stick: 160,000 <mua 1 tặng 1>
            Son dưỡng được ca ngợi như một loại son dưỡng môi “thần thánh”, Nuxe Reve de Miel – Lip Moisturizing Stick dường như là một vị “cứu tinh” cho những đôi môi quanh năm suốt tháng đều khô ráp và nứt nẻ.
            Nuxe Reve de Miel – Lip Moisturizing Stick cung cấp độ ẩm cho môi với sáp ong cùng dầu dưỡng thiên nhiên, môi như được ủ “nước”, cấp thêm dưỡng chất, dưỡng ẩm sâu như thể các tế bào của môi đều được làm mới, được tăng thêm độ ẩm, nên ngay cả những đôi môi “nhăn nheo” cũng sẽ được mềm, mịn trở lại.

            Son Dưỡng môi dạng thỏi Caudalie Lip Conditioner: 150,000 <mua 1 tặng 1>
            Dựa theo tiêu chí của Caudalie với thành phần 99.5% là nguyên liệu thiên nhiên, không hề chứa parabens và được loại bỏ hoàn toàn các chất bảo quản có hại khác. Không chỉ đơn thuần là một loại son dưỡng môi cung cấp độ ẩm, phục hồi đôi môi nứt nẻ mà Caudalie Lip Conditioner còn được bổ sung hợp chất chống oxy hóa từ những trái nho, giữ cho đôi môi bạn luôn mềm mại, hạn ché tình trạng bong tróc, môi hồng hào, luôn “trẻ”

            Dầu Xả Le Petit Amande Douce Creme de Riz 200ml: 170,000 <mua 1 tặng 1>
            Dầu xả chiết xuất Sữa Hạnh Nhân và Sữa Gạo Le Petit Olivier chứa thành phần dưỡng chất từ thiên nhiên dành cho mái tóc nhanh và dễ bết dính, khô xơ thiếu sức sống.

            Son Fenty Beauty by Rihanna Lipstick – Freckle Fiesta: 590,000 <mua 1 tặng 1>
            Chất Son Fenty Beauty Mattemoiselle Plush Matte cực đỉnh cùng độ bền màu rất tốt. Thuộc dòng Mattemoiselle Plush Matte lên màu mịn mướt và chuẩn màu chỉ sau một lần quệt. Khoảng 20 phút sau son sẽ lì hơn và không bị xê dịch nhiều khi bặm, siêu nhẹ môi.
            Freckle Fiesta – Cam gạch đẹp nức lòng người.

            Son Thỏi YSL Rouge Volupte Shine Oil In Stick 46 Orange Perfecto: 720,000 <mua 1 tặng 1>
            Son Thỏi YSL Rouge Volupte có chất son được thiết kế ánh nhũ lấp lánh đậm chất trendy của năm 2020, thực sự là rất đáng để sở hữu đó. Giúp đôi môi mọng ửng hồng như gái Hàn, cộng thêm hiệu ứng ánh nhũ siêu tinh tế làm môi thêm phần căng mọng.
            46 Orange Perfecto: cam hồng san hô trẻ trung tươi tắn, không cần trang điểm

            Son Thỏi YSL Rouge Pur Couture 114 Dial Red: 790,000 <mua 1 tặng 1>
            YSL Rouge Pur Couture với chất son mềm mại, chứa nhiều dưỡng chất, màu sắc đậm rõ nét. Son mềm mượt, lên môi cho cảm giác căng mọng, đầy đặn hơn chứ không bóng nhẫy và dính dính khó chịu.
            Tông 114 Dial Red: đỏ thuần.

            Son Thỏi Dior Addict Stellar Shine 464 Energy: 720,000 <mua 1 tặng 1>
            Son Thỏi Dior Addict Stellar Shine là dòng son màu có dưỡng chứa sáp ong tự nhiên, cùng chiết xuất lô hội và các loại dầu đặc biệt sẽ giữ cho đôi môi bạn mềm mại và căng mọng.
            Mint mang đến 3 màu sắc bắt mắt nhất bộ sưu tập phù hợp với những cô gái theo đuổi phong cách nhẹ nhàng, nữ tính và tự nhiên trong kiểu trang điểm hằng ngày trong veo.
            464 Energy: hồng cam san hô, phù hợp với các makeup nhẹ nhàng, nữ tính.

            Son Kem YSL Vinyl Cream 401: 890,000 <mua 1 tặng 1>
            Son Kem YSL Vinyl Cream có chất son bóng mịn. Không bị dính dấp mà lại trơn mượt trên môi. Màu lên rõ từ lần nhúng cọ đầu tiên, căng mọng như một trái Cherry ngọt ngào. Son bóng mướt nhưng lên màu chuẩn và giữ màu lâu, kể cả khi trôi đi đôi môi vẫn hồng hào xinh xắn
            Tông 401 là tông đỏ tươi hợp với mọi tông da và nhiều dịp khác nhau.

            Son Kem YSL Vinyl Cream 409: 890,000 <mua 1 tặng 1>
            Son Kem YSL Vinyl Cream có chất son bóng mịn. Không bị dính dấp mà lại trơn mượt trên môi. Màu lên rõ từ lần nhúng cọ đầu tiên, căng mọng như một trái Cherry ngọt ngào. Son bóng mướt nhưng lên màu chuẩn và giữ màu lâu, kể cả khi trôi đi đôi môi vẫn hồng hào xinh xắn
            Tông 409 là tông Đỏ rượu vang hợp với mọi tông da và nhiều dịp khác nhau.

             Son Fenty Beauty Glow Bomb Fussy 5,5ml: 320,000 <mua 1 tặng 1>
            Son Fenty Beauty Gloss Bomb Fussy đem lại đôi môi quyến rũ với tông màu hồng ngọt ngào “My Lip But Better” với texture mướt mịn, không gây cảm giác nặng môi như các loại son bóng thông thường. Đánh lên là môi được phủ một lớp óng ánh long lanh hút mắt dã man.

             Sữa Tắm Andalou Citrus Sunflower Uplifting 251ml : 290,000 <mua 1 tặng 1>
            Sữa Tắm Andalou Citrus Sunflower Uplifting Shower Gel 251ml là sữa tắm giúp làm sáng da.
            Với công thức dưỡng ẩm cao giúp làm sạch da nhẹ nhàng nhưng vẫn giữ lại độ ẩm tự nhiên của làn da, Sữa Tắm Andalou Citrus Sunflower Uplifting Shower Gel 251ml mang đến làn da mềm mại và mịn màng hơn chỉ sau một lần tắm.

             Dưỡng Chất Kiehls Clearly Corrective Accelerated Clarity Renewing Ampoules: 210,000 <mua 1 tặng 1>
            Dưỡng Chất Kiehl’s Clearly Corrective Accelerated Clarity Renewing Ampoules là sự KẾT HỢP của vitamin C và AHAs trong một sản phẩm. Sản phẩm giúp tẩy da chết, kích thích thay mới tế bào, tăng khả năng giữ nước tự nhiên của da, giúp chúng mình nhanh chóng đạt được làn da căng mịn, rạng ngời, và đặc biệt là mờ thâm trong khoảng 14 ngày!!

            Tẩy Trang Calliderm Bleuet 500ml: 250,000 <mua 1 tặng 1>

            Tẩy trang Calliderm Eau Micellaire – Cornflower Water là dòng nước tẩy trang dành cho da cực kì nhạy cảm, dễ kích ứng. Tẩy trang chiết xuất từ Thanh Cúc giúp dưỡng da sáng mịn, cung cấp độ ẩm cần thiết cho da, se khít lỗ chân lông, kháng viêm, ngừa mụn.Tẩy trang Calliderm với công nghệ tiên tiến – Phân tử Micellar kép giúp làm sạch hoàn toàn lớp trang điểm, bụi bẩn, bã nhờn sâu trong lỗ chân lông mà không gây khô hại da, phù hợp với da thường, da nhạy cảm.

            Kem Chống Nắng Paula’s Choice Skin Restoring Moisturizer SPF50 60ml: 930,000 <mua 1 tặng 1>
            Kem dưỡng ẩm chống lão hóa cung cấp lượng ẩm dồi dào và khả năng bảo vệ da mạnh mẽ với các thành phần “siêu sao” như niacinamide, bơ hạt mỡ và cam thảo cho làn da trẻ trung và mịn màng không tì vết.
            – Giúp ngăn ngừa lão hóa sớm.
            – Các chất chống oxy hóa giúp da chống lại những căng thẳng từ môi trường.
            – Resist Skin Restoring Moisturizer with SPF 50 giúp bảo vệ da khỏi tác hại của tia UVA, UVB. Các chất chống oxy hóa mạnh mẽ như bơ hạt mỡ, hạt cà phê và táo kết hợp với niacinamide và chiết xuất cam thảo giúp cải thiện kết cấu và tông màu da, đem lại làn da rạng rỡ hơn sau mỗi lần sử dụng.

            Kem Dưỡng Paula’s Choice Water Infusing Electrolyte Moisturizer 50ml: 1,190,000 <mua 1 tặng 1>
            Kem Dưỡng Paula’s Choice Water Infusing Electrolyte Moisturizer là kem dưỡng “điện giải” giúp TĂNG KHẢ NĂNG GIỮ ẨM TỰ NHIÊN của da lên. Hỗn hợp các chất điện giải trong công thức của PLC gồm canxi, kali và magiê được liên kết với PCA giống như cấu tạo của da, cho phép chúng hoạt động ổn định. Giúp làn da duy trì sự cân bằng độ ẩm, tăng cường hàng rào bảo vệ da, khiến da tràn đầy sức sống hơn. Không hề nhờn dính, thoáng mát và thẩm thấu nhanh.

            Sữa Rửa Mặt MartiDerm Acniover Purifying Gel 200ml: 850,000 <mua 1 tặng 1>
            Sữa rửa mặt MartiDerm Acniover Purifying Gel 200ml là dòng sữa rửa mặt dạng gel thiết kế dành riêng cho da dầu mụn. Sữa rửa mặt nổi tiếng với không chứa hoạt chất hoạt động bề mặt Sodium Lauryl Sulfate (SLS) / Sodium Laureth Sulfate (SLES). Vì thế làn da nhạy cảm cũng có thể sử dụng mà không lo khô căng da.

            Kem Dưỡng MartiDerm Skin Repair Cicra-Vass Crema Cream 30ml: 780,000 <mua 1 tặng 1>

            Kem dưỡng phục hồi da, giúp tái tạo phần da bị tổn thương. Kem dưỡng nuôi dưỡng lớp màng ẩm tự nhiên bảo vệ da, cho da khỏe mạnh, mềm mại hơn, đồng thời tăng cường độ đàn hồi và săn chắc của da. Sản phẩm phù hợp với làn da nhạy cảm nhất cũng có thể sử dụng.

            Ống Tinh Chất Marti Derm Platinum Night Renew 2ml: 110,000 <mua 1 tặng 1>
            MartiDerm Platinum Night Renew Ampoule là ampoule nuôi dưỡng và tái tạo da chuyên biệt vào ban đêm từ thương hiệu Martiderm. Công thức kết hợp nồng độ 10% AHA, Marine Collagen và Hyaluronic Acid giúp loại bỏ tế bào chết và thúc đẩy tái tạo tế bào da mới, đồng thời dưỡng ẩm cho da căng mướt, tăng cường độ đàn hồi và săn chắc của làn da, cho làn da tươi trẻ và rạng rỡ. Sản phẩm lý tưởng để sử dụng như một loại tinh chất tăng cường, giúp tối ưu hoá kết quả của các sản phẩm treatment khác.

            Ống Tinh Chất Marti Derm The Originals Proteos Liposome 2ml: 110,000 <mua 1 tặng 1>
            MartiDerm The Originals Proteos Liposome là tinh chất cô đặc với công thức không chứa dầu (oil-free) có chức năng cấp ẩm tức thì, lý tưởng dành cho làn da dầu nhạy cảm, dễ nổi mụn hoặc da phản ứng. Công thức sản phẩm độc đáo với 3% Proteoglycans kết hợp cùng Vitamins C & E liposomes và chiết xuất cây Phỉ, giúp cung cấp độ ẩm mạnh mẽ và chuyên sâu cho da, cân bằng lượng dầu tiết ra. Đồng thời, sản phẩm giúp chống oxy hoá và hỗ trợ sửa chữa các tổn thương da do tác hại của ánh nắng mặt trời, làm sáng và đồng đều màu da.

            Tinh Chất Marti Derm Black Diamond Skin Complex Advanced 2ml: 130,000 <mua 1 tặng 1>
            MartiDerm Black Diamond Skin Complex Advanced là phiên bản cải tiến mới của Skin Complex+, với công thức toàn diện nhất giúp đặc trị làn da lão hóa do yếu tố nội sinh. Sản phẩm là sự kết hợp của 5% Proteum 89+ (thành phần độc quyền Martiderm) giúp cung cấp độ ẩm chuyên sâu và cải thiện cấu trúc da; 25% Vitamin Complex (trong đó bao gồm 15% Vitamin C-Tech & 10% Vitamin A, B5, E, F & D-Like) giúp chống oxy hóa mạnh mẽ, làm chậm tiến trình lão hóa da, đồng thời nuôi dưỡng và phục hồi lại độ ẩm mượt, sáng mịn và tươi trẻ của làn da. Sản phẩm đặc biệt lý tưởng dành cho làn da khô mất nước, xỉn màu, có dấu hiệu chảy xệ và nếp nhăn.

            Son Silky Girl OMG Powder Matte 16 Chili: 149,000 <mua 1 tặng 1>
            Son Thỏi Silkygirl OMG Powder Matte thiết kế son nhã nhặn, thanh lịch, vỏ son đen bóng kèm nắp bấm. Chất son mềm nhẹ như bơ, mỏng mướt dễ chịu như đánh son dưỡng nhưng màu lên vẫn chuẩn. Son giấu nhẹm mọi khuyết điểm và để lại lớp finish yêu chiều đôi môi.
            14 Daisy – Đỏ Coral

            Son Silky Girl OMG Powder Matte 16 Chili: 149,000 <mua 1 tặng 1>
            Son Thỏi Silkygirl OMG Powder Matte thiết kế son nhã nhặn, thanh lịch, vỏ son đen bóng kèm nắp bấm. Chất son mềm nhẹ như bơ, mỏng mướt dễ chịu như đánh son dưỡng nhưng màu lên vẫn chuẩn. Son giấu nhẹm mọi khuyết điểm và để lại lớp finish yêu chiều đôi môi.
            16 Chili – Đỏ Hồng

            Son Silky Girl OMG Powder Matte 16 Chili: 149,000 <mua 1 tặng 1>
            Son Thỏi Silkygirl OMG Powder Matte thiết kế son nhã nhặn, thanh lịch, vỏ son đen bóng kèm nắp bấm. Chất son mềm nhẹ như bơ, mỏng mướt dễ chịu như đánh son dưỡng nhưng màu lên vẫn chuẩn. Son giấu nhẹm mọi khuyết điểm và để lại lớp finish yêu chiều đôi môi.
            15 Candy – Đỏ Cam

            Dầu Gội Le Petit Olivier Apporte Douceur Brillance 250ml: 160,000 <mua 1 tặng 1>
            Dầu gội chiết xuất Sữa Hạnh Nhân và Sữa Gạo Le Petit Olivier chứa thành phần dưỡng chất từ thiên nhiên dành cho mái tóc trở nên bết dính, khô xơ thiếu sức sống. Nhờ chiết xuất từ tự nhiên, dầu gội sẽ lấy đi bụi bẩn, dầu thừa một cách nhẹ nhàng và làm sạch hiệu quả.

             Kem Dưỡng Murad Clarifying Water Gel 47ml: 1,737,000 <mua 1 tặng 1>
            Kem Dưỡng Murad Clarifying Water Gel Oil Free là lựa chọn lý tưởng cho da dầu mụn. Chứa công nghệ độc quyền của hãng với khả năng cân bằng lượng dầu thừa trên da, giúp da đủ độ ẩm căng bóng mà không gây đổ dầu nhiều. Chất gel mát lạnh, thấm nhanh rất hợp cho mùa hè, chỉ 10s là thấm hết thôi. Công thức hoàn toàn không chứa dầu nên vô cùng lành tính.

            Kem Dưỡng Paula’s Choice Probiotic Nutrient Moisturizer 50ml: 1,390,000 <mua 1 tặng 1>
            Kem Dưỡng Paula’s Choice Probiotic Nutrient Moisturizer là kem dưỡng có khả năng tác động trực tiếp đến cấu trúc hệ vi sinh vật trên da. Trực tiếp bổ sung các chất dưỡng ẩm và chống oxi hóa như Ceramides, Vitamin E và các loại Acid béo giúp kem dưỡng kiêm nhiệm chức năng dưỡng ẩm, làm mềm da và chống lão hóa. Chất gel lỏng thấm nhanh và phù hợp với nhiều loại da. Có thể sử dụng cả sáng và tối.

            Serum Murad Rapid Age Spot Correcting 30ml: 3,078,000 <mua 1 tặng 1>
            Serum Trị Nám Murad PHIÊN BẢN MỚI. Thành phần cải tiến không còn chứa Hydroquinone.
            Hiệu quả hơn, an toàn hơn, tác dụng nhanh trông thấy ít nhất trong 1 TUẦN.
            Serum Murad Rapid Age Spot Correcting 30ml sử dụng:
            – Công nghệ độc quyền NHP-3: pha trộn 3 thành phần mạnh mẽ Niacinamide, Hexylresorcinol và Plankton Extract, đã được chứng minh là có thể cải thiện màu da từ làm đều màu, sáng trắng, trị thâm trị nám đến giải quyết các dấu hiệu lão hóa rõ rệt.
            – Đặc biệt chứa Vitamin C dạng bền vững Ascorbyl Glucoside, khi kết hợp với Niacinamide sẽ làm tăng hiệu quả làm sáng gấp đôi mà khó bị oxy hóa, giảm tác dụng.
            – Chưa hết, serum Murad trị nám phiên bản mới còn loại bỏ cồn và AHA, giúp giảm nguy cơ kích ứng cho da nhạy cảm.

             Treatment Murad Outsmart Acne 50ml: 1,980,000 <mua 1 tặng 1>
            Treatment Murad Outsmart Acne Clarifying có khả năng trị các loại mụn như MỤN ẨN, MỤN VIÊM, MỤN ĐẦU TRẮNG, ĐẦU ĐEN chỉ trong vòng 1 tuần
            Công nghệ độc quyền Penta – Acid – 5 loại acid TRỊ MỤN. Đó là BHA trị mụn ẩn. AHA giảm mụn đầu đen đầu trắng. Và 3 loại acid khác giúp kiềm dầu và giảm mụn viêm sưng
            Outsmart Acne nên dùng ở bước sau toner như 1 serum trị mụn, có thể bôi theo vùng mụn để có hiệu quả nhất, với những trường hợp mụn nặng nên kết hợp với chấm mụn Murad Rapid Relief để giảm viêm và rụng cồi mụn sưng nhanh hơn

            Serum Murad Vita C Glycolic Brightening 30ml: 3,298,000 <mua 1 tặng 1>
            Serum Murad Vita C Glycolic Brightening là sự kết hợp của 3 dạng Vitamin C và AHA, bền vững hơn, ổn định hơn, hấp thụ tốt hơn. Giúp chống lại tình trạng lão hóa, da sạm màu, kém săn chắc bởi những tác động bởi môi trường đồng thời duy trì làn da tươi sáng, khỏe mạnh. Giúp bật sáng tông da, tăng cường miễn dịch da và tạo độ đàn hồi & săn chắc trên da.

             Tinh Chất Murad Hydro Dynamic Quenching 30ml: 3,078,000 <mua 1 tặng 1>
            Tinh Chất Murad Hydro Dynamic Quenching Essence là dòng tinh chất cung cấp độ ẩm, đẩy nhanh tốc độ phục hồi làn da lão hóa, giúp da sáng mịn và căng bóng hơn. Sản phẩm là chìa khóa vàng cho da thiếu ẩm, có dấu hiệu lão hóa được nhiều người sử dụng tin dùng.

            Kem Dưỡng Murad Night Fix Enzyme Treatment 30ml: 2,488,000 <mua 1 tặng 1>
            Kem Dưỡng Murad Night Fix Enzyme Treatment 30ml là giải pháp phục hồi làn da vào buổi đêm. Khi vào giấc ngủ, làn da luôn cần được dưỡng ẩm liên tục và tái tạo làn da. Nhờ chứa ChronoPeptide và các loại enzyme mà làn da sẽ được cung cấp độ ẩm dồi dào và hồi sinh sau giấc ngủ. Tạo ra vẻ ngoài tươi khỏe và tràn đầy sức sống tựa như có được giấc ngủ thật ngon

            Sữa Rửa Mặt Murad AHA/BHA Cleanser 15ml: 123,000 <mua 1 tặng 1>
            Sữa rửa mặt và tẩy tế bào chết trong cùng một sản phẩm – Sữa Rửa Mặt Murad AHA/BHA Exfoliating Cleanser 200ml.
            Sữa rửa mặt tẩy tế bào chết với 3 chất thành phần acid: Salicylic, Lactic và Glycolic Acid giúp nhẹ nhàng tái tạo và phục hồi các tế bào mang lại làn da sáng khỏe, hạn chế bít tắc lỗ chân lông gây mụn.
            Sự kết hợp của hạt Jojoba còn giúp nhẹ nhàng lấy đi các tế bào chết xỉn màu, thiếu sức sống đồng thời “đánh bóng” cho làn da thêm mượt mà và mềm mại, giảm mụn cám, mụn đầu đen. Hạt nhỏ xíu xiu không hề làm xước da đâu nha.
            Sữa rửa mặt không làm khô da ngược lại còn giúp da mềm mịn vô cùng.

            Sữa Rửa Mặt Murad Essential C 15ml: 118,000 <mua 1 tặng 1>
            Murad Essential-C Cleanser là sữa rửa mặt cực kỳ đình dám đến từ thương hiệu mỹ phẩm nổi tiếng Murad. Sản phẩm sử dụng Vitamin A, C và E giúp cân bằng và cấp ẩm ngay lập tức cho những làn da bị tổn hại bởi môi trường.
            Trong đó Vitamin A giúp nuôi dưỡng và làm lành da, Vitamin C giúp ngăn ngừa sự tổn thương của môi trường và Vitamin E làm dịu, cấp ẩm cho vùng da mất nước.
            Ngoài ra sản phẩm còn chứa thành phần Phospholipids giúp giữ nước, cân bằng độ ẩm cho da khiến bạn được trải nghiệm cảm giác sảng khoái tuyệt đối trong hương cam quýt thanh mát, da sạch bong mà vẫn mềm mại ẩm mượt như nhung.

            Serum Murad Retinol Youth Renewal 30ml: 3,435,000 <mua 1 tặng 1>
            Serum Murad Retinol Youth Renewal là một trong những công nghệ mang tính đột phá về chăm sóc da lão hóa. Sản phẩm giúp giảm thiểu các dấu hiệu lão hóa một cách mạnh mẽ & nhanh chóng nhưng lại vô cùng êm dịu trên làn da. Đồng thời, serum còn tạo ra nét da tươi sáng, mịn màng. Giải quyết được các vấn đề phổ biến như: Da không đều màu, kém săn chắc…

            Set Murad Take Time Off: 3,118,000 <mua 1 tặng 1>
            Bộ sản phẩm cho bạn trải nghiệm gần như đầy đủ các bước dưỡng da trong phác đồ điều trị lão hóa theo chuẩn của Bác sĩ Howard Murad. Set này là set mới nhất và cũng chính là set mà mình mong đợi nhất từ Murad bởi những feedbacks, reviews cực kì tích cực của những sản phẩm lẻ trong set, ngoài ra khi ghép set như vậy giá thành sản phẩm cũng rẻ đi đáng kể nửa…thực sự rất hấp dẫn phải không ạ? ^^
            —————————–
            1. Serum Retinol Youth Renewal:
            Là sản phẩm retinol số 1 tại Mỹ với công dụng làm mờ các các nếp nhăn hiện hữu, làm đều màu da và hồi phục độ săn chắc cho làn da.
            —————————–
            2. Replenishing Multi-Acid Peel:
            Peel kích hoạt tái tạo thanh xuân giúp tái cấu trúc bề mặt da, để da mịn màng, tươi sáng với bộ 3 AHA – BHA – Tranexamic Acid. Ngoài ra sp còn được bổ sung thêm các thảo dược, omega giúp làm dịu, giảm kích ứng, chống lão hóa nữa.
            —————————–
            3. Kem dưỡng Retinol Youth Renewal Night Cream:
            Kem dưỡng ban đêm này có tác dụng làm mờ những dấu hiệu lão hóa, cải thiện bề mặt da trở nên mềm mại, mịn màng, và khôi phục độ ẩm cần thiết cho da.
            —————————–
            4. Kem mắt Renewing Eye Cream:
            Kem mắt với công nghệ Retinol Tri-Active giúp làm tan bọng mắt và xóa nhòa những nếp nhăn quanh mắt.
            Bộ sản phẩm cho bạn trải nghiệm gần như đầy đủ các bước dưỡng da trong phác đồ điều trị lão hóa theo chuẩn của Bác sĩ Howard Murad. Set này là set mới nhất và cũng chính là set mà mình mong đợi nhất từ Murad bởi những feedbacks, reviews cực kì tích cực của những sản phẩm lẻ trong set, ngoài ra khi ghép set như vậy giá thành sản phẩm cũng rẻ đi đáng kể nửa…thực sự rất hấp dẫn phải không ạ? ^^', 'trangthai' => '1'],

        ]);
        DB::table('donhang')->insert([
            ['idkhachhang'=>'1','idgiamgia'=>'1', 'tennguoinhan'=>'Hương','diachikhachhang'=> 'Công viên phần mềm Quang Trung , Phường Trung Mỹ Tây , Q.12 , TP.HCM','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'15000000' ,'tongtiensaugiamgia'=>'15000000','ghichucuakhachhang'=> 'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'GRAP','trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idkhachhang'=>'2','idgiamgia'=>'2', 'tennguoinhan'=>'Hùng','diachikhachhang'=> '345/3 Tổ 29 , Khu phố 2 , Phường Trung Mỹ Tây , Q.12 , TP.HCM','sdtnguoinhan'=>'0845737032' ,'tongtientruocgiamgia'=>'21000000' ,'tongtiensaugiamgia'=>'20000000','ghichucuakhachhang'=> 'Sản phẩm vận chuyển tới gọi em nha ạ em cảm ơn ^^','phuongthucthanhtoan'=>'MOMO' ,'phuongthucgiaohang'=>'BE','trangthai'=>1,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idkhachhang'=>'3','idgiamgia'=>'3', 'tennguoinhan'=>'Ly Ly','diachikhachhang'=> '186 , Phường Thái Hà , Q.Đống Đa , Hà Nội','sdtnguoinhan'=>'0845737033' ,'tongtientruocgiamgia'=>'5000000' ,'tongtiensaugiamgia'=>'5500000','ghichucuakhachhang'=> 'Em sẽ nhận được đơn hàng full tuần nha ạ','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'DHL','trangthai'=>2,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idkhachhang'=>'4','idgiamgia'=>'2', 'tennguoinhan'=>'Thảo','diachikhachhang'=> '415 Nguyễn Trãi , Phường 7 , Q.5 , TP.HCM','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'30000000' ,'tongtiensaugiamgia'=>'28000000','ghichucuakhachhang'=> '','phuongthucthanhtoan'=>'VNPAY' ,'phuongthucgiaohang'=>'GRAP','trangthai'=>4,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idkhachhang'=>'5','idgiamgia'=>'1', 'tennguoinhan'=>'Thảo Mai','diachikhachhang'=> 'Tầng 1, 28 Seongam-ro 13-gil, Mapo-gu, Seoul','sdtnguoinhan'=>'0845737036' ,'tongtientruocgiamgia'=>'35000000' ,'tongtiensaugiamgia'=>'30000000','ghichucuakhachhang'=> '주문은 이번주말에 받아볼께요 감사합니다','phuongthucthanhtoan'=>'MOMO' ,'phuongthucgiaohang'=>'FEDEX','trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
        ]);
        DB::table('sanpham')->insert([
            ['iddanhmuc'=>1,'name'=>'LA MER The Treatment Lotion Hydrating Mask - Mặt nạ tái tạo da', 'slug'=> Str::slug('LA MER The Treatment Lotion Hydrating Mask - Mặt nạ tái tạo da', '-'),'img'=>'profile-photo-1635519235.png','mota'=> 'Mặt nạ “siêu dưỡng da” được ngâm trong 30ml The Treatment Lotion ngay lập tức mang đến sự tăng cường hydrat hoá giúp chữa lành,','noidung'=>'Mặt nạ tấm với công nghệ ôm sát của Nhật Bản và hàng triệu sợi vi mô tinh khiết độc đáo tăng cường sự tập trung của quá trình hydrat hóa chữa lành, làm rạng rỡ, đầy đặn và truyền vào da một nguồn năng lượng mạnh mẽ có tác dụng hồi sinh làn da chỉ trong tíc tắc.

            - Kết cấu vi mô độc đáo của các sợi phản lực tinh khiết nhẹ nhàng ôm lấy làn da để chúng ta có thể hoạt động trong khi sử dụng mặt nạ.

            - “Thuốc tiên” Miracle Broth tái tạo và phục hồi các chức năng tự nhiên của da, làm mờ các khuyết điểm, làm mịn và làm đầy rãnh nhăn, se khít lỗ chân lông.

            - Phức hợp tái tạo lên men độc quyền với sự kết hợp của tảo và 73 khoáng chất từ biển cung cấp độ ẩm sâu và bổ sung các tế bào da.

            - Làm dịu làn da kích ứng, mẩn đỏ và cải thiện kết cấu da.

            Giải pháp cho: da khô, xỉn màu, mất kết cấu, da lão hoá, chảy sệ...

            Công dụng chính: dưỡng ẩm và giữ ẩm, dưỡng sáng và rạng rỡ, làm dịu kích ứng, làm đầy các rãnh và xoá mờ nếp nhăn...

            Phù hợp với mọi loại da, kể cả da nhạy cảm, kích ứng.

            Sản xuất tại Nhật Bản' ,'trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],

            ['iddanhmuc'=>2,'name'=>'LA MER The Moisturizing Cream - Kem dưỡng ẩm da khô, hư tổn', 'slug'=> Str::slug('LA MER The Moisturizing Cream - Kem dưỡng ẩm da khô, hư tổn', '-'),'img'=>'profile-photo-1635519265.png','mota'=> 'Một loại kem giàu dưỡng chất cùng với độ ẩm sâu nhất giúp ngay lập tức mang lại làn da ẩm mọng,','noidung'=>'Với khả năng hydrat hóa cao và cải thiện sự khô da chỉ trong ba ngày, kem dưỡng siêu giàu ẩm này truyền vào da một độ ẩm sâu tức thì và kéo dài cả ngày. Giúp làm dịu rõ rệt làn da nhạy cảm và kích ứng.

             - Chứa thành phần tái tạo tế bào Miracle Broth™ - "thuốc tiên" huyền thoại có trong mọi sản phẩm La Mer - truyền vào da những lợi ích tái tạo có nguồn gốc từ biển, chữa lành và làm đầy, làm mịn các các nếp nhăn, để lộ sự rạng rỡ mới cho làn da.

             - Chiết xuất trà chanh - thành phần chống oxy hoá mạnh mẽ của La Mer - tăng cường hàng rào tự nhiên của da, bảo vệ chống lại sự căng thẳng và ô nhiễm môi trường cho một làn da sáng và tinh khiết.

             - Sữa chữa các khuyết điểm trên da như nếp nhăn, sẹo thâm và thu nhỏ lỗ chân lông.

             - Mang lại sự săn chắc, khoẻ mạnh, đầy sức sống và phục hồi làn da.

             Phù hợp cho mọi loại da, đặc biệt là các loại da khô, siêu khô, da tổn thương do kem trộn hay da nhạy cảm sau điều trị.

             Không chứa Paraben, Phthalates, Sulfates, Sulfites.' ,'trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],

            ['iddanhmuc'=>3,'name'=>'LA MER The Lip Volumizer - Son dưỡng làm dày môi', 'slug'=> Str::slug('LA MER The Lip Volumizer - Son dưỡng làm dày môi', '-'),'img'=>'profile-photo-1635519289.png','mota'=> 'Son dưỡng làm mềm và làm mờ các rãnh nhăn trên môi, đồng thời làm căng mọng bờ môi,','noidung'=>'Một công thức không chỉ làm đầy và hoàn thiện đôi môi, mà còn giúp bảo vệ chống lại thiệt hại trong tương lai bởi vì làn da môi mỏng manh của chúng ta đặc biệt dễ bị tổn thương bởi các tác nhân gây hại từ môi trường.

            Phương pháp điều trị huyền thoại của La Mer Miracle Broth™ được bào chế với các chất chống oxy hóa giúp bảo vệ đôi môi, ngay lập tức làm đầy đặn và làm rõ các đường nét.

            Nuôi dưỡng da môi bằng hydrat hoá chữa lành tự nhiên, mọi vấn đề như khô nẻ sẽ được giải quyết triệt để.

            Thành phần nổi bật:

            - Miracle Broth™ - công thức với tảo biển giàu dinh dưỡng và các thành phần nguyên chất khác ngâm da trong khả năng chữa bệnh huyền thoại của biển, giúp hỗ trợ quá trình sửa chữa tự nhiên và độ ẩm cho da.

            - Lime Tea Concentrate: hỗn hợp chống oxy hóa tăng áp này giúp bảo vệ làn da mỏng manh chống lại tác hại của môi trường.

            - Phức hợp tái tạo làm đầy: công thức với các thành phần biển và khoáng chất giàu dinh dưỡng, phức hợp có nguồn gốc biển mạnh này hỗ trợ Collagen tự nhiên và mang lại vẻ trẻ trung đầy đặn.

            *Miracle Broth là "thần dược" độc quyền có trong tất cả sản phẩm của La Mer, được pha chế từ tảo biển thu hoạch bằng tay cùng với các chất dinh dưỡng và khoáng chất khác thông qua quá trình lên men tự nhiên. Hỗ trợ năm khía cạnh của sự chữa lành tự nhiên: độ ẩm, tái tạo, làm dịu, làm mịn và rạng rỡ giúp đưa làn da trở lại trạng thái khỏe mạnh nhất.' ,'trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],

            ['iddanhmuc'=>4,'name'=>'LA MER The Lip Balm - Sáp dưỡng môi cao cấp', 'slug'=> Str::slug('LA MER The Lip Balm - Sáp dưỡng môi cao cấp', '-'),'img'=>'profile-photo-1635519312.png','mota'=> 'Sáp dưỡng môi luôn nằm trong danh sách những sản phẩm dưỡng môi tốt nhất thời đại của Thế Giới.','noidung'=>'Làm mới làn da môi ngay từ lần sử dụng đầu tiên, sáp dưỡng này đưa vào môi một độ ẩm sâu, khiến chúng mềm mại, mịn màng và đầy đặn.

            - Ngay lập tức làm mềm độ nhám, nuôi dưỡng và giúp làm dịu sự khô da môi nghiêm trọng.

            - Phức hợp Lipid được cấp bằng sáng chế giúp phục hồi và tăng cường hàng rào độ ẩm tự nhiên và ngăn ngừa tác hại từ môi trường.

            - Nồng độ cao Miracle BrothTM  sẽ tái tạo và làm mới làn da một cách tinh tế nhất.

            - Hương bạc hà thơm mát.

            *Miracle Broth là "thần dược" độc quyền có trong tất cả sản phẩm của La Mer, được pha chế từ tảo biển thu hoạch bằng tay cùng với các chất dinh dưỡng và khoáng chất khác thông qua quá trình lên men tự nhiên. Hỗ trợ năm khía cạnh của sự chữa lành tự nhiên: độ ẩm, tái tạo, làm dịu, làm mịn và rạng rỡ giúp đưa làn da trở lại trạng thái khỏe mạnh nhất.' ,'trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],

            ['iddanhmuc'=>5,'name'=>'LA MER The Eye Concentrate - Kem dưỡng mắt tập trung', 'slug'=> Str::slug('LA MER The Eye Concentrate - Kem dưỡng mắt tập trung', '-'),'img'=>'profile-photo-1635519333.jpg','mota'=> 'Kem mắt tập trung giúp cải thiện rõ rệt quầng thâm và làm mờ các nếp nhăn đồng thời ngăn ngừa thiệt hại trong tương lai với công thức mới dưỡng ẩm sâu.','noidung'=>'Kem mắt cô đặc mang lại một đôi mắt trẻ trung đầy sức sống và tươi sáng, nơi dễ bị tác động nhất bởi tác hại của thời gian và môi trường.

            - Với gấp ba lần lượng "thuốc tiên" Miracle Broth™ so với phiên bản cũ, truyền vào da nguồn năng lượng thiết yếu và hydrat hóa chữa lành, hỗ trợ đổi mới cho vùng mắt mịn màng và sáng hơn.

            - Chiết xuất trà chanh được biết đến là một chất chống oxy hoá mạnh mẽ độc quyền của La Mer giúp ngăn ngừa sự lão hoá, nếp nhăn, quầng thâm và đồi mồi trong tương lai trước khi nó bắt đầu.

            - Chiết xuất lên men từ tảo bẹ có nguồn gốc từ vùng nước tinh khiết của đảo Jeju Hàn Quốc khôi phục lại sự cân bằng cho một cái nhìn mạnh mẽ và tái sinh.

            - Hematite - một loại khoáng chất giàu sắt, tích điện từ giúp cải thiện rõ rệt quầng thâm, cải thiện vùng da không đều màu.

            - Radiant Ferment làm sáng, làm rõ và hỗ trợ Colagen và Elastin tự nhiên để tăng cường độ săn chắc.

            - Dụng cụ lăn mắt đi kèm được thiết kế đặc biệt, có đầu bạc ngay lập tức cải thiện vi tuần hoàn tự nhiên để mang lại vẻ ngoài tràn đầy năng lượng.

             Giải pháp cho:

            Quầng thâm
            Da khô
            Nếp nhăn và chân chim
            *Miracle Broth là "thần dược" độc quyền có trong tất cả sản phẩm của La Mer, được pha chế từ tảo biển thu hoạch bằng tay cùng với các chất dinh dưỡng và khoáng chất khác thông qua quá trình lên men tự nhiên. Hỗ trợ năm khía cạnh của sự chữa lành tự nhiên: độ ẩm, tái tạo, làm dịu, làm mịn và rạng rỡ giúp đưa làn da trở lại trạng thái khỏe mạnh nhất.

            ' ,'trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['iddanhmuc'=>6,'name'=>'INVISIBLUR PERFECTING SHIELD BROAD SPECTRUM SPF 30', 'slug'=> Str::slug('INVISIBLUR PERFECTING SHIELD BROAD SPECTRUM SPF 30', '-'),'img'=>'profile-photo-1635519355.jpg','mota'=>'Với khả năng chống nắng quang phổ rộng cùng công nghệ MuraSol độc quyền, sản phẩm giúp bảo vệ làn da hoàn hảo trước tác hại của tia UV.','noidung'=>'Bảo vệ toàn diện. Nuôi dưỡng đủ đầy. Mặt da nhung mịn. Perfecting Shield Broad Spectrum SPF 30 PA +++ ra đời như thể để xóa nhòa ranh giới giữa sản phẩm chăm sóc da và mỹ phẩm trang điểm, giúp làn da nhận được những gì tuyệt hảo nhất của thiên nhiên và công nghệ. Với chiết xuất những loại peptide từ nấm, giúp các dấu hiệu lão hóa dường như tan biến, để lại nét da trẻ trung và căng đầy.

            Khi dùng độc lập, công thức Soft Focus Complex sẽ làm mờ lỗ chân lông, nếp nhăn và các khuyết điểm khác trên da. Khi sử dụng như kem lót, công thức này sẽ giúp kem nền đạt được hiệu ứng hoàn hảo nhất, và giữ cho lớp trang điểm bền bỉ suốt 12 tiếng*. Invisiblur Perfecting Shield Broad Spectrum SPF 30 PA +++ còn không hề chứa Parabens, Sulfates, Phthalates, Gluten và các thành phần có chiết xuất từ động vật.

            Invisiblur Perfecting Shield Broad Spectrum SPF 30 PA +++ còn là kem chống nắng quang phổ rộng cùng co giúp bạn chống được tất cả ảnh hưởng từ tia UVA và UVB. Hơn cả thế, với dạng thức trong suốt tựa như vô hình trên da, giúp bạn tránh được các vệt trắng mà kem chống nắng thông thường hay mắc phải.

            Thành phần nổi bật:' ,'trangthai'=>0,'created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL]
        ]);
        DB::table('sanphamchitiet')->insert([
            ['idsanpham' => 1, 'ml'=> '250', 'soluotmua' => '150', 'tonkho' => '300', 'dongia' => '590000'],
            ['idsanpham' => 1, 'ml'=> '450', 'soluotmua' => '99', 'tonkho' => '300', 'dongia' => '690000'],
            ['idsanpham' => 1, 'ml'=> '750', 'soluotmua' => '80', 'tonkho' => '300', 'dongia' => '890000'],
            ['idsanpham' => 2, 'ml'=> '250', 'soluotmua' => '150', 'tonkho' => '300', 'dongia' => '1500000'],
            ['idsanpham' => 2, 'ml'=> '450', 'soluotmua' => '99', 'tonkho' => '300', 'dongia' => '1600000'],
            ['idsanpham' => 2, 'ml'=> '750', 'soluotmua' => '80', 'tonkho' => '300', 'dongia' => '1800000'],
            ['idsanpham' => 3, 'ml'=> '250', 'soluotmua' => '150', 'tonkho' => '300', 'dongia' => '3600000'],
            ['idsanpham' => 3, 'ml'=> '450', 'soluotmua' => '99', 'tonkho' => '300', 'dongia' => '3800000'],
            ['idsanpham' => 3, 'ml'=> '750', 'soluotmua' => '80', 'tonkho' => '300', 'dongia' => '4000000'],
            ['idsanpham' => 4, 'ml'=> '250', 'soluotmua' => '150', 'tonkho' => '300', 'dongia' => '1650000'],
            ['idsanpham' => 4, 'ml'=> '450', 'soluotmua' => '99', 'tonkho' => '300', 'dongia' => '1850000'],
            ['idsanpham' => 4, 'ml'=> '750', 'soluotmua' => '80', 'tonkho' => '300', 'dongia' => '2000000'],
            ['idsanpham' => 5, 'ml'=> '250', 'soluotmua' => '150', 'tonkho' => '300', 'dongia' => '4700000'],
            ['idsanpham' => 5, 'ml'=> '450', 'soluotmua' => '99', 'tonkho' => '300', 'dongia' => '4800000'],
            ['idsanpham' => 5, 'ml'=> '750', 'soluotmua' => '80', 'tonkho' => '300', 'dongia' => '5000000'],
        ]);
        DB::table('donhangchitiet')->insert([
            ['iddonhang' => 1, 'idsanphamchitiet'=> 1, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '590000','dongiasaugiamgia'=>'550000'],
            ['iddonhang' => 1, 'idsanphamchitiet'=> 2, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '690000','dongiasaugiamgia'=>'650000'],
            ['iddonhang' => 1, 'idsanphamchitiet'=> 3, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '890000','dongiasaugiamgia'=>'850000'],
            ['iddonhang' => 2, 'idsanphamchitiet'=> 4, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '1500000','dongiasaugiamgia'=>'1450000'],
            ['iddonhang' => 2, 'idsanphamchitiet'=> 5, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '1600000','dongiasaugiamgia'=>'155000'],
            ['iddonhang' => 2, 'idsanphamchitiet'=> 6, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '1800000','dongiasaugiamgia'=>'1700000'],
            ['iddonhang' => 3, 'idsanphamchitiet'=> 7, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '3600000','dongiasaugiamgia'=>'3100000'],
            ['iddonhang' => 3, 'idsanphamchitiet'=> 8, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '3800000','dongiasaugiamgia'=>'375000000'],
            ['iddonhang' => 3, 'idsanphamchitiet'=> 9, 'img' => 'cchamsocda.jpg', 'soluong' => '5', 'dongiatruocgiamgia' => '4000000','dongiasaugiamgia'=>'3900000'],
        ]);
        DB::table('giohang')->insert([
            ['idkhachhang' => 1],
            ['idkhachhang' => 2],
            ['idkhachhang' => 3],
            ['idkhachhang' => 4],
            ['idkhachhang' => 5],
        ]);
        DB::table('giohangchitiet')->insert([
            ['idgiohang' => 1, 'idsanpham'=> 1,'soluong' => 2],
            ['idgiohang' => 1, 'idsanpham'=> 2,'soluong' => 2],
            ['idgiohang' => 2, 'idsanpham'=> 3,'soluong' => 3],
            ['idgiohang' => 2, 'idsanpham'=> 4,'soluong' => 3],
            ['idgiohang' => 3, 'idsanpham'=> 5,'soluong' => 4],
            ['idgiohang' => 3, 'idsanpham'=> 6,'soluong' => 4],
            ['idgiohang' => 4, 'idsanpham'=> 1,'soluong' => 5],
            ['idgiohang' => 5, 'idsanpham'=> 2,'soluong' => 5],
        ]);
        DB::table('lieutrinh')->insert([
            ['idnhanvien'=>1,'idkhachhang'=>6,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 2,'idkhachhang'=> 5,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 3,'idkhachhang'=> 4,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 4,'idkhachhang'=> 3,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu' =>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 5,'idkhachhang'=> 2,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 6,'idkhachhang'=> 1,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],

        ]);
        DB::table('lieutrinhchitiet')->insert([
            ['idlieutrinh' => 1, 'iddichvu'=> 1,'idnhanvien'=> 1, 'mota' =>'Bước 1: Kiểm tra tình trạng da
            chăm sóc da cơ bản tại spa
            Kiểm tra da/ Soi da là bước đầu tiên trong quy trình chăm sóc da cơ bản tại spa
            Hầu hết các spa uy tín hiện nay đều trang bị máy soi da để phân tích và đánh giá chi tiết tình trạng da của bạn. Khi nắm được da của bạn thuộc loại da nào và đang gặp vấn đề gì sẽ đưa ra được những lời khuyên và phương pháp chăm sóc da phù hợp. Một phương pháp làm đẹp có thể tốt với người này nhưng lại không tốt với người kia, đó rất có thể do chúng ta chưa thực sự hiểu làn da của mình.



            Bước 2: Tẩy trang
            Đây là bước bắt buộc đối với các khách hàng có lớp trang điểm trên mặt, kể cả kem chống nắng. Bởi vì các bước làm sạch thông thường sẽ không thể lấy đi hết lớp makeup trên da. Các kỹ thuật viên sẽ dùng bông cotton thấm nước tẩy trang lau toàn bộ mặt theo chiều từ dưới lên để tẩy sạch lớp trang điểm và bụi bẩn trên da.

            Các kỹ thuật viên có thể bỏ qua bước này nếu da khách hàng không thoa bất kỳ sản phẩm nào lên mặt.

            chăm sóc da cơ bản tại spa
            Rửa mặt kết hợp massage nhẹ nhàng bắt đầu quá trình chăm sóc da hoàn hảo
            Rửa mặt sẽ giúp lấy đi những bụi bẩn và làm sạch nước tẩy trang còn sót lại trên da. Tùy thuộc vào tình trạng da của bạn mà kỹ thuật viên sẽ sử dụng loại sữa/gel rửa mặt cho da dầu, da khô hay da mụn,… Tuy nhiên, thông thường tại các spa đều sử dụng sản phẩm có nguồn gốc tự nhiên, tính chất dịu nhẹ để an toàn cho da.



            Bước 4: Tẩy tế bào chết
            Bước này giúp loại bỏ các lớp sừng hóa tồn tại sâu bên trong lỗ chân lông. Chỉ có tiến hành theo thứ tự này, làn da mới được làm sạch chuyên sâu. Với bước này các chuyên viên làm đẹp sẽ dùng kem tẩy tế bào chết có hạt chứa AHA để làm sạch và trắng da. Đồng thời, thực hiện các động tác massage với các chuyển động tròn nhỏ bằng đầu ngón tay.
            Tuy nhiên, bước này chỉ nên thực hiện 1-2 lần/1 tuần thôi nha. Nếu các bạn mới tẩy da chết rồi đi spa thì có thể nhắc nhân viên bỏ qua bước này.



            Bước 5: Xông hơi, hút dầu, hút mụn cám
            Việc xông hơi sẽ giúp cho lỗ chân lông giãn nở, các chuyên viên dễ dàng hút sạch dầu thừa và mụn cám trên da bằng máy hút mụn. Công đoạn này cần làm một cách thận trọng và dụng cụ được đảm bảo vệ sinh.



            chăm sóc da cơ bản tại spa
            Kỹ thuật viên cần đàm bảo ống hút đã được thay mới, sát khuẩn vệ sinh trước khi dùng cho khách


            Bước 6: Massage mặt
            Massage mặt thường xuyên giúp các cơ thịt không bị teo tóp, tăng lực co giãn và cơ đàn hồi nên có tác dụng chống lão hoá đồng thời xoá nếp nhăn không mong muốn. Massage còn điều tiết và tăng cường cơ năng thần kinh, kích thích máu tuần hoàn khiến cơ được cung cấp đủ máu và chất dinh dưỡng. Tuy nhiên, bước này chỉ dành cho các bạn có làn da không mụn thôi nha. Bởi việc sử dụng dầu massage và chà xát lên da có thể khiến cho tình trạng da mụn tồi tệ hơn đó.

            chăm sóc da cơ bản tại spa
            Massage mặt là bước mà khách hàng được thư giãn tối da khi đến chăm sóc da tại spa


            Bước 7: Đắp mặt nạ
            Mặt nạ cung cấp các dưỡng chất cần thiết cho da, chống lão hóa và trắng sáng hơn. Thời gian đắp mặt nạ trên da chỉ nên để 20-30 phút thôi nha. Nếu để quá lâu, da sẽ bị khô đi và có hiệu quả không mong muốn.



            Bước 8: Dưỡng ẩm cho da
            Quy trình chăm sóc da cơ bản ở spa sẽ được kết thúc bằng bước dưỡng ẩm cho da bằng kem dưỡng hoặc nước cân bằng độ ẩm cho làn da.

            Trên đây là 8 bước trong quy trình chăm sóc da cơ bản tại spa mà bạn nên áp dụng vào cơ sở của mình hoặc tham khảo để lựa chọn spa sử dụng dịch vụ. Giá dịch vụ cũng phụ thuộc rất nhiều vào chất lượng của từng spa nên bạn cần lựa chọn kỹ lưỡng để chăm sóc làn da của mình nhé!', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang1.jpg'],
            ['idlieutrinh' => 2, 'iddichvu'=> 2,'idnhanvien'=> 2, 'mota' =>'Các bước chuẩn bị xăm, phun môi:

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
            ['idlieutrinh' => 3, 'iddichvu'=> 3,'idnhanvien'=> 3, 'mota' =>'Bước 1: Làm sạch

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
            ['idlieutrinh' => 4, 'iddichvu'=> 4,'idnhanvien'=> 4, 'mota' =>'1. Bước 1: Làm sạch và sát khuẩn da mặt
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
            ['idlieutrinh' => 5, 'iddichvu'=> 5,'idnhanvien'=> 5, 'mota' =>'Thời gian thực hiện và các bước trong liệu trình Điều Trị Mụn Lưng tại Fbeauty
            Bước 1: Rửa và làm sạch các lớp bụi bẩn trên bề mặt da

            Bước 2: Tẩy tế bào chết giúp loại bỏ lớp tế bào già cội sần sùi thô ráp, đồng thời làm thông thoáng lỗ chân lông để các bước điều trị tiếp theo hiệu quả hơn.

            Bước 3: Xông hơi giúp giãn nở lỗ chân lông, làm bước đệm cho quá trình lấy nhân mụn tiếp theo.

            Bước 4: Hút mụn cám và loại bỏ bã nhờn ẩn sâu dưới lỗ chân lông

            Bước 5: Tiến hành lấy nhân mụn triệt để bằng các dụng cụ chuyên dùng, mỗi bộ dụng cụ chỉ sử dụng 1 lần duy nhất cho từng khách hàng

            Bước 6: Sát trùng bằng thuốc chuyên biệt cho liệu trình

            Bước 7: Đắp mặt nạ thuốc bắc giúp dịu vết mụn đỏ, kiểm soát bã nhờn.

            Bước 8: Thắp ánh sáng sinh học ức chế tuyến bã nhờn, hạn chế nhiễm trùng vết thương, giảm kích ứng da, làm diệu và giảm đau, phục hồi tế bào da hư tổn, kích thích tuần hoàn máu, tái tạo da.

            Bước 9: Phun oxy giúp làm sạch sâu, bổ sung dưỡng chất cần thiết nuôi dưỡng một làn da tươi sáng, khỏe mạnh từ bên trong đồng thời ngăn chặn mọi quá trình lão hóa', 'ngay' => '29102022','trangthai' => 0, 'imgkhachhang'=>'khachhang5.jpg'],
            ['idlieutrinh' => 6, 'iddichvu'=> 1,'idnhanvien'=> 6, 'mota' =>'Bước 1: Vệ sinh mắt, rửa mắt với nước muối
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
        DB::table('hoadon')->insert([
            ['idkhachhang' => 1, 'idcoso'=> 1, 'idnhanvien'=> 1, 'idthungan' => 1,'idlieutrinh'=> 1,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '1500000','tongtiensaugiamgia'=>'1450000', 'trangthai'=>0, 'ghichu'=>'dịch vụ rất đa dạng và bắt mắt '],
            ['idkhachhang' => 2, 'idcoso'=> 2, 'idnhanvien'=> 2, 'idthungan' => 2,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3600000','tongtiensaugiamgia'=>'3400000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng '],
            ['idkhachhang' => 3, 'idcoso'=> 2, 'idnhanvien'=> 3, 'idthungan' => 3,'idlieutrinh'=> 3,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '4000000','tongtiensaugiamgia'=>'45000000', 'trangthai'=>2, 'ghichu'=>'dịch vụ rất đa dạng '],
            ['idkhachhang' => 4, 'idcoso'=> 1, 'idnhanvien'=> 4, 'idthungan' => 4,'idlieutrinh'=> 3,'idgiamgia'=> 1, 'tongtientruocgiamgia'=> '16000000','tongtiensaugiamgia'=>'15000000', 'trangthai'=>3, 'ghichu'=>'dịch vụ rất đa dạng '],
            ['idkhachhang' => 5, 'idcoso'=> 2, 'idnhanvien'=> 5, 'idthungan' => 5,'idlieutrinh'=> 2,'idgiamgia'=> 2, 'tongtientruocgiamgia'=> '3800000','tongtiensaugiamgia'=>'35000000', 'trangthai'=>0, 'ghichu'=>'dịch vụ rất đa dạng '],
            ['idkhachhang' => 6, 'idcoso'=> 2, 'idnhanvien'=> 6, 'idthungan' => 6,'idlieutrinh'=> 2,'idgiamgia'=> 3, 'tongtientruocgiamgia'=> '10000000','tongtiensaugiamgia'=>'9000000', 'trangthai'=>1, 'ghichu'=>'dịch vụ rất đa dạng '],
        ]);
        DB::table('lieutrinh')->insert([
            ['idnhanvien'=>1,'idkhachhang'=>6,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 2,'idkhachhang'=> 5,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 3,'idkhachhang'=> 4,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 4,'idkhachhang'=> 3,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu' =>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 5,'idkhachhang'=> 2,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],
            ['idnhanvien'=> 6,'idkhachhang'=> 1,'ngaybatdau'=>'29102021','dukienketthuc'=>'29102022','ghichu'=>'liệu trình đang tiến hành','trangthai'=>0],

        ]);
          DB::table('hoadonchitiet')->insert([
            ['idhoadon'=>1,'idlienquan'=>1,'type'=>0,'soluong'=>'2','dongiatruocgiamgia'=>'15000000','dongiasaugiamgia'=>'14000000'],
            ['idhoadon'=>2,'idlienquan'=>2,'type'=>1,'soluong'=>'2','dongiatruocgiamgia'=>'18000000','dongiasaugiamgia'=>'17500000'],
            ['idhoadon'=>3,'idlienquan'=>3,'type'=>2,'soluong'=>'2','dongiatruocgiamgia'=>'21000000','dongiasaugiamgia'=>'20000000'],
            ['idhoadon'=>4,'idlienquan'=>4,'type'=>3,'soluong'=>'2','dongiatruocgiamgia'=>'30000000','dongiasaugiamgia'=>'29500000'],
        ]);
           DB::table('subscribed')->insert([
            ['email'=>'ly@gmail.com'],
            ['email'=>'huong@gmail.com'],
            ['email'=>'thao@gmail.com'],
            ['email'=>'thaomai@mail.com'],
        ]);
        DB::table('wishlist')->insert([
            ['idkhachhang'=>1,'idsanpham'=>1],
            ['idkhachhang'=>2,'idsanpham'=>2],
            ['idkhachhang'=>1,'idsanpham'=>3],
            ['idkhachhang'=>2,'idsanpham'=>4],
            ['idkhachhang'=>1,'idsanpham'=>5],
            ['idkhachhang'=>2,'idsanpham'=>6],

        ]);


    }
}
