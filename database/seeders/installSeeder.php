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
            ['name'=>'Cơ sở 1','diachi'=> 'Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh', 'tinh'=>'4', 'quan'=>'43', 'huyen'=>'1343']
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
            ['name'=>'Làm đẹp', 'slug'=>'lam-dep', 'img'=>'lamdep.jpg', 'giamgia'=> 1, 'iddm'=> 1, 'motangan'=>'Lam dep - Những phương pháp làm đẹp da, tóc đẹp, cải thiện vóc dáng hiệu quả và đơn giản. Chia sẻ về cách chọn mỹ phẩm, trang điểm, trị mụn', 'dongia'=>200000, 'noidung'=>'Có phải bạn sẽ cười tươi hơn, tự tin ngẩn cao đầu khi có ai đó khen bạn: "Trông bạn thật xinh đẹp!". Hãy chân thật với chính mình, bạn thật sự muốn mình xinh đẹp để tự tin gặp gỡ bất kỳ ai và cuốn hút họ ngay cái nhìn đầu tiên, hay bạn muốn mình cứ xuề xòa, luộm thuộm để mong chờ người khác thấy vẻ đẹp tâm hồn bên trong con người bạn? ', 'trangthai'=> 1],
            ['name'=>'Trị mụn y khoa', 'slug'=> Str::slug('Trị mụn y khoa', '-'), 'img'=>'lamdep.jpg', 'giamgia'=> 0, 'iddm'=> 2, 'motangan' => '', 'dongia' => 200000, 'noidung' => '', 'trangthai' => 1]
        ]);

        DB::table('nhanvien')->insert([
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'ngoanhquoc@gmail.com','password'=> '$2y$10$iimuFe7voEEthMTFQvRBX.hk1XrL3O1W7lXTZPCxktAIWkuEmY692','role'=>1 ,'active'=>1 ,'name'=>'Ngô Anh Quốc', 'img'=>'', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'quoc.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'longnh.2401@gmail.com','password'=> bcrypt('123123123'),'role'=>1 ,'active'=>1 ,'name'=>'Long', 'img'=>'', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'quoc.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'tuong2712@gmail.com','password'=> '$2y$10$nlRY7DRJfQQLSbI0aV7h9usw0waQxL9uGbNFQChi.06.YIigQCC3q','role'=>1 ,'active'=>1 ,'name'=>'Tưởng', 'img'=>'', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'quoc.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'nhanvien@gmail.com','password'=> bcrypt('123123123'),'role'=>1 ,'active'=>1 ,'name'=>'nhân viên', 'img'=>'', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'quoc.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'tranquangnhan1606@gmail.com','password'=> '$2y$10$Pmr.7sQX/HnGhwq8ZzlOPuZ9P.yBZ1XSxoRINN4arsLVGR6.6lxf6','role'=>1 ,'active'=>1 ,'name'=>'Nhân', 'img'=>'', 'namsinh'=> 2000,'gioitinh'=> 1, 'sdt'=> '012345678', 'avatar'=>'quoc.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['idcoso'=>1,'iddichvu'=>1, 'email'=>'thuhuyendev01@gmail.com','password'=> '$2y$10$Pmr.7sQX/HnGhwq8ZzlOPuZ9P.yBZ1XSxoRINN4arsLVGR6.6lxf6','role'=>1 ,'active'=>1 ,'name'=>'Thu Huyền', 'img'=>'huyen.jpg', 'namsinh'=> 2001,'gioitinh'=> 0, 'sdt'=> '012345678', 'avatar'=>'huyen.jpg','trangthai'=> 1,'remember_token'=> 'hJ5bPBxgp9UsxQhEyS0BNTSmUTkaEz40lZ2evGmzsa6ZIQSYTSRxto1RejYq','created_at'=> '2021-10-03 20:56:18','updated_at'=> NULL],
        ]);
        DB::table('giamgia')->insert([
            ['name'=>'MAXSALE150','ma'=>'FB01', 'number'=>25000,'max'=> 150000,'loai'=>1 ,'ngaytao'=>'10252021' ,'ngayhethan'=>'10252029','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['name'=>'MAXSALE250','ma'=>'FB02', 'number'=>250000,'max'=> 950000,'loai'=>0 ,'ngaytao'=>'10252021' ,'ngayhethan'=>'10252029','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
            ['name'=>'MAXSALE200','ma'=>'FB03', 'number'=>150000,'max'=> 200000,'loai'=>1 ,'ngaytao'=>'10252021' ,'ngayhethan'=>'10252029','created_at'=> '2021-08-16 20:56:18','updated_at'=> NULL],
        ]);
        DB::table('khachhang')->insert([
            ['name' => 'Long', 'sdt'=> '0965286055', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Nhân', 'sdt'=> '0965286056', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Ly Ly', 'sdt'=> '0965286057', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Hương Hương', 'sdt'=> '0965286058', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Thảo', 'sdt'=> '0965286059', 'password' => bcrypt('123123'), 'active' => 1, 'img' => ''],
            ['name' => 'Thảo Mai', 'sdt'=> '0965286060', 'password' => bcrypt('123123'), 'active' => 1, 'img' => '']
        ]);
        DB::table('blog')->insert([
            ['iddm' => '8', 'img' => '02_12.jpg', 'name' => 'DR.Seoul trị và ức chế mụn VAS 4.0 cho da mụn và nhạy cảm', 'slug' => Str::slug('DR.Seoul trị và ức chế mụn VAS 4.0 cho da mụn và nhạy cảm', '-'),'motangan'=>'Seoul Trị và ức chế Mụn VAS 4.0 – Một trong những liệu trình chăm sóc và điều trị mới nhất dành cho những khách hàng gặp phải vấn đề mụn tại Seoul Spa.', 'noidung' => 'Ưu điểm của liệu trình DR. Seoul Trị và ức chế Mụn VAS 4.0
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
            // ['iddm' => '8', 'img' => 'adrian-motroc-87InWldRhgs-unsplash.jpg', 'name' => 'Trị mụn bằng tia laser có tốt không? Công nghệ laser trị mụn tốt nhất 2021', 'slug' => Str::slug('Trị mụn bằng tia laser có tốt không? Công nghệ laser trị mụn tốt nhất 2021', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
            // ['iddm' => '8', 'img' => 'beautician-with-brush-applies-white-moisturizing-mask-face-young-girl-client-spa-beauty-salon.jpg', 'name' => 'Top 7 thẩm mỹ viện uy tín – chuyên nghiệp tại Đà Nẵng', 'slug' => Str::slug('Top 7 thẩm mỹ viện uy tín – chuyên nghiệp tại Đà Nẵng', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
            // ['iddm' => '8', 'img' => 'beauty-spa.jpg', 'name' => 'Tiêm hồng môi và những lưu ý quan trọng cần nhớ', 'slug' => Str::slug('Tiêm hồng môi và những lưu ý quan trọng cần nhớ', '-'), 'noidung' => 'Test', 'trangthai' => '1'],
        ]);


    }
}
