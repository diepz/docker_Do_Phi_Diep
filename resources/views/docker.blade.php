<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOCKER TRAINNING</title>
</head>
<body>
<div class="alignment">
<p class="text-center">Đỗ Phi Điệp</p>
<p class="text-center">Docker</p>
</div>
<div class="container">
    <div class="alignment">
        <h4><i><h3>1.</h3>Docker là gì</i></h4>
        <span class="left">Docker là một open platform cung cấp cho người sử dụng những công cụ và service để người sử dụng có thể đóng gói và chạy
      chương trình của mình trên các môi trường khác nhau một cách nhanh nhất.</span>
    </div>
    <div class="alignment">
        <h4><i><h3>2.</h3>Docker container là gì</i></h4>
        <span class="left">Hoạt động giống như một thư mục (directory), chứa tất cả những thứ cần thiết để một ứng dụng có thể chạy được.
    Mỗi một docker container được tạo ra từ một docker image. Các thao tác với một container :
    chạy, bật, dừng, di chuyển, và xóa</span>
    </div>
    <div class="alignment">
        <h4><i><h3>3.</h3>Docker images là gì</i></h4>
        <span class="left"> Là một khuôn mẫu để tạo ra container, là file nền của một hệ điều hành, một nền tảng, một ngôn ngữ
            (vd: ubuntu image, ruby image, rails image, mysql image…) </span>
    </div>
    <div class="alignment">
        <h4><i><h3>4.</h3>Ưu điểm của Docker</i></h4>
        <div class="left">
            <p>Giả lập môi trường trên server ở dưới máy local </p>
            <p>Trải nghiệm và dùng thử một hệ điều hành mới </p>
            <p>Lưu trữ và chia sẻ setup môi trường dự án cho nhóm </p>
            <p>Test song song </p>
            <p>Test app trên một hệ điều hành khác </p>
        </div>
    </div>
    <div class="alignment">
        <h4><i><h3>5.</h3>So sánh Docker và Vagrant</i></h4>
        <table border="1px" style="text-align: center">
            <tr>
                <td></td>
                <td>Docker</td>
                <td>Vagrant</td>
            </tr>
            <tr>
                <td>Virtualization type</td>
                <td>VE</td>
                <td>VM</td>
            </tr>
            <tr>
                <td>Tài nguyên được đảm bảo ở phần cứng</td>
                <td>Có</td>
                <td>Không</td>
            </tr>
            <tr>
                <td>Hệ điều hành hỗ trợ</td>
                <td>Linux only</td>
                <td>Linux, Unix, Window</td>
            </tr>
            <tr>
                <td>Thời gian khởi động</td>
                <td>Vài giây</td>
                <td>Vài phút</td>
            </tr>
            <tr>
                <td>Mức cô lập cho các hệ thống ảo được tạo</td>
                <td>Một phần</td>
                <td>Toàn bộ</td>
            </tr>
            <tr>
                <td>Trọng lượng</td>
                <td>Rất nhẹ</td>
                <td>Nặng</td>
            </tr>
            <tr>
                <td>Lợi thế khác</td>
                <td>Nhanh chóng, dễ học</td>
                <td>Tích hợp với tool CM</td>
            </tr>
        </table>
    </div>
    <div class="alignment">
        <h4><i><h3>6.</h3>Docker Compose là gì</i></h4>
        <span class="left">Compose là công cụ giúp định nghĩa và khởi chạy multi-container Docker applications.
    Trong Compose, chúng ta sử dụng Compose file để cấu hình application's services.
    Chỉ với một câu lệnh, lập trình viên có thể dễ dàng create và start toàn bộ các services
    phục vụ cho việc chạy ứng dụng.</span>
        <p>Nên dùng Docker-compose vì đây là một công cụ tuyệt vời hỗ trợ cài đặt nhiều container
            và thiết lập các cấu hình cho các container</p>
    </div>
    <div class="alignment">
        <h4><i><h3>7.</h3>Mô tả khái quát 1 file cấu hình Docker-compose</i></h4>
        <p><b>File docker-compose.yml được tổ chức gồm 4 phần: </b></p>
        <div class="left">
            <p><b>Version:</b> Chỉ ra version của file Compose </p>
            <p><b>Services:</b> Với Docker, một service là tên của một container </p>
            <p><b>Networks:</b> Phần này được sử dụng để cấu hình network cho ứng dụng.
                Có thể cài đặt network mặc định hoặc định nghĩa netword chỉ định cho ứng dụng</p>
            <p><b>Volumes:</b> Gắn đường dẫn trên host machine được sử dụng trên container</p>
        </div>
        <p><b>Với phần config services, có một vài directive thường được sử dụng như sau:</b></p>
        <div class="left">
            <p><b>Images:</b> Chỉ ra image được sử dụng để build container</p>
            <p><b>Build:</b> Directive này có thể được sử dụng thay directive image. Chỉ ra vị trí của Dockerfile để
                build
                container</p>
            <p><b>db:</b> Là một biến cho container sắp định nghĩa</p>
            <p><b>Restart:</b> yêu cầu container restart khi hệ thống restart</p>
            <p><b>Enviroment:</b> Định nghĩa các biến môi trường truyền vào Docker khi chạy command</p>
            <p><b>Port:</b> Kết nối port từ container đến host theo cách thức host:container</p>
            <p><b>Links:</b> Liên kết service này với bất kỳ service nào khác trong Docker-Compose file bằng các chỉ rõ
                tên
            </p>
            <p><b>Dockerfile:</b> đợn giản là một file dạng text chứa một tập hợp các dòng lệnh dùng để khởi tạo một
                docker image.
                Nó quy định image được khởi tạo như thế nào, gồm các ứng dụng gì</p>
            <p><b>Workdir:</b> Định nghĩa dirrectory cho CMD</p>
        </div>
        <p><b>Một số cú pháp khác:</b></p>
        <div class="left">
            <p><b>RUN:</b> Để thực thu một câu lệnh nào đó trong quá trình build images</p>
            <p><b>CMD:</b> Để thực thi một câu lệnh trong quá trình bật container</p>
        </div>
    </div>
</div>
<footer>
    <div class="foot">
    </div>
</footer>
</body>
<script type="text/javascript" src="{{asset('js/scroll.js')}}"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</html>