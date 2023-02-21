<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biến trong PHP</title>
</head>
<body>
    <!-- 
        0. Biến dùng để lưu giá trị số hoặc chữ trong khi lập trình, để có thể sử dụng lại nhiều lần giá trị của biến
        đang lưu giữ. Mọi ngôn ngữ lập trình đều cần đến biến
        1. một biết được đặt tên theo cú pháp: $ + tên biến
        2. có thể gán giá trị ban đầu cho biến, hoặc không gán biến sẽ mang giá trị NULL
        3. nếu biến dài, đặt tên theo quy tắc viết hoa các chữ cái tiếp theo trong tên biến
        4. luôn đặt tên biến có ý nghĩa liên quan đến giá trị mà nó lưu giữ
     -->

    <?php
        $tenSinhVien;
        $message = 'Xin chào các bạn';
        $daHetHang = true;
        $tongTienHang = 1000000;
    ?>

    <h1><?php echo $message; ?></h1>
    <h1><?php echo $daHetHang; ?></h1>
    <h1><?php echo $tongTienHang; ?></h1>
    <h1><?php echo $tenSinhVien; ?></h1>


    <!-- Bài tập
        Khai báo một biến mang ý nghĩa tiền khấu hao và gán giá trị cho nó bằng 120000. In ra màn hình "Tiền khấu hao: 120000"
        Code luôn phía dưới
    -->
    <h2>Bài làm</h2>

</body>
</html>