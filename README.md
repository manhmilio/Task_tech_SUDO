Tuần 1:
1. Tìm hiểu php-laravel-mô hình MVC

- Model (Mô hình): Đại diện cho dữ liệu và logic nghiệp vụ của ứng dụng. Trong Laravel, Eloquent ORM được sử dụng để tương tác với cơ sở dữ liệu, cho phép định nghĩa các lớp mô hình tương ứng với các bảng trong cơ sở dữ liệu.

- View (Giao diện): Chịu trách nhiệm hiển thị dữ liệu cho người dùng. Laravel sử dụng hệ thống template Blade để tạo ra các giao diện động và linh hoạt. Blade cho phép sử dụng cú pháp ngắn gọn và hỗ trợ kế thừa giao diện, giúp việc quản lý và tái sử dụng mã nguồn trở nên dễ dàng hơn.

- Controller (Bộ điều khiển): Xử lý các yêu cầu từ người dùng, tương tác với Model và trả về View tương ứng. Các controller trong Laravel giúp tổ chức logic xử lý của ứng dụng một cách rõ ràng và có cấu trúc.

2. Tìm hiểu cấu trúc của 1 dự án Laravel
- app: 
  + Console: Các lệnh Artisan tùy chỉnh

  + Exceptions: Xử lý ngoại lệ (Exceptions)

  + Http: Chứa các controller, middleware, và request (Xử lý logic request từ người dùng).

  + Controllers: Chứa các Controller (Xử lý logic ứng dụng)

  + Middleware: Chứa các Middleware (Lọc request)

  + Models: Chứa các Model (Tương tác với Database)

  + Providers: Chứa các Service Providers (Cấu hình ứng dụng)

- config:
  + app.php: Cấu hình chung của Laravel.
  + database.php: Cấu hình database
  + mail.php: Cấu hình mail server.
  + queue.php: Cấu hình hàng đợi.
  + services.php: Chứa thông tin kết nối đến API bên thứ ba.

- bootstrap:
  + app.php giúp Laravel khởi động ứng dụng.
  + cache chứa file cache để tăng tốc ứng dụng.
 
- routes:
  + web.php – Routes cho giao diện web.
  + api.php – Routes dành cho API
  + console.php – Routes cho lệnh trong console.
  + channels.php – Dùng cho ứng dụng real-time.
 
- database:
  + migrations/: File quản lý thay đổi cấu trúc database.
  + seeds/: Dữ liệu mẫu.
  + factories/: Dùng để tạo dữ liệu mẫu tự động.
  + seeds/: Dùng để chèn dữ liệu vào database.
 
- public:
  + views/: Chứa các file Blade templates (HTML + PHP).
  + css/: Chứa các file CSS tùy chỉnh.
  + css/: Chứa các file CSS tùy chỉnh.
  + js/: Chứa các file JavaScript tùy chỉnh.

- storage:
  + app/ – Chứa file tải lên.
  + framework/ – Chứa cache, sessions, views.
  + logs/ – Chứa file log của Laravel.
 
- Các File Cấu Hình Chính:
  + .env: File quan trọng chứa các biến môi trường (database, API key, config mail,...).
  + composer.json: Cấu hình các dependency của Laravel.
  + package.json: Cấu hình package npm (nếu dùng Vue/React).
  + artisan: File CLI để chạy lệnh trong Laravel (vd: php artisan serve).

3. Tìm hiểu route/middleware
- route: Route trong Laravel xác định cách ứng dụng phản hồi các yêu cầu từ người dùng dựa trên URL và phương thức HTTP. Các route được định nghĩa trong các tệp như routes/web.php cho ứng dụng web và routes/api.php cho API.
- middleware: Middleware là các lớp trung gian xử lý yêu cầu HTTP trước khi chúng đến controller hoặc sau khi nhận phản hồi từ controller. Chúng thường được sử dụng để thực hiện các tác vụ như xác thực người dùng, kiểm tra quyền truy cập, ghi log, hoặc xử lý CORS.

4. Làm quen với Laravel bằng cách clone 1 dự án lên github

-> Đăng nhập vào github:

-> Tìm New repository, tạo kho lưu trữ.
-> đẩy dự án mình tạo lên:

-> Khởi tạo Git trong thư mục dự án: git init

-> Thêm tất cả các tệp vào Git: git add .

-> Kiểm tra trạng thái: git status

-> Thêm địa chỉ repository GitHub: git remote add origin https://github.com/....

-> Commit các thay đổi: git commit -m "Initial commit"

-> Đẩy dự án lên GitHub: git branch -M main, git push -u origin main

-> clone dự án có sẵn về máy: git clone https://github.com/...

+) Xây dựng project mẫu với form thêm/sửa/xóa 1 sinh viên

5. Tìm hiểu cách hoạt động của request

- Trong Laravel, quá trình xử lý một yêu cầu HTTP (request) trải qua nhiều bước từ khi nhận yêu cầu đến khi trả về phản hồi (response). Hiểu rõ vòng đời của request giúp bạn nắm bắt cách Laravel hoạt động và tối ưu hóa ứng dụng hiệu quả hơn.

- Điểm khởi đầu: public/index.php: Mọi yêu cầu HTTP đến ứng dụng Laravel đều được chuyển hướng đến tệp public/index.php. Tệp này đóng vai trò là điểm vào chính, khởi tạo quá trình xử lý của framework.

- Tự động tải và khởi tạo ứng dụng
Trong index.php, Laravel tải tệp tự động vendor/autoload.php để nạp các thư viện cần thiết. Sau đó, ứng dụng được khởi tạo thông qua tệp bootstrap/app.php, tạo một instance của lớp Illuminate\Foundation\Application.

- Khởi tạo Kernel
Laravel sử dụng HTTP Kernel để xử lý các yêu cầu HTTP. Kernel chịu trách nhiệm quản lý các middleware và định tuyến yêu cầu đến controller tương ứng.

- Xử lý middleware
Yêu cầu được truyền qua các middleware đã đăng ký. Middleware có thể thực hiện các tác vụ như xác thực, ghi log hoặc xử lý CORS trước khi yêu cầu đến controller.

- Định tuyến (Routing)
Sau khi qua middleware, yêu cầu được chuyển đến hệ thống định tuyến của Laravel để xác định controller và phương thức cần gọi dựa trên URL và phương thức HTTP.

- Controller và xử lý logic
Controller nhận yêu cầu từ router và thực hiện các xử lý logic cần thiết, như truy xuất dữ liệu từ cơ sở dữ liệu thông qua model, xử lý nghiệp vụ và chuẩn bị dữ liệu cho view.

- Trả về phản hồi (Response)
Sau khi controller xử lý xong, một phản hồi HTTP được tạo ra, có thể là một view HTML, JSON hoặc bất kỳ định dạng nào khác. Phản hồi này được gửi lại qua các middleware (sau xử lý) trước khi trả về cho client.

- Kết thúc (Terminate)
Sau khi phản hồi được gửi đi, Laravel thực hiện các tác vụ kết thúc, như ghi log hoặc giải phóng tài nguyên, để hoàn tất vòng đời của yêu cầu.
