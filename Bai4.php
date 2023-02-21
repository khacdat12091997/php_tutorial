<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểu dữ liệu trong PHP</title>
</head>
<body>
    <!-- 
       Kiểu dữ liệu (Data types) giúp xác định kiểu dữ liệu của biến trong PHP
       Có các kiểu dữ liệu chính sau:
       String: kiểu chữ số: 'Hello 123'
       Integer: kiểu số nguyên: 1, 2, 3, 4...
       Float: kiểu số thực: 1.1, 1.05, 2.0
       Boolen: kiểu boolen biểu thị biến có giá trị đúng hoặc sai

       Array: Kiểu mảng: [1,2,3],
       Object: Kiểu đối tượng

       NULL: Kiểu NULL,
       Resource: Kiểu resource

     -->

    <?php
        $map = 100; //kiểu integer
        $soPi = 3.14; // kiểu Float
        $message = 'Thành công'; //kiểu String
        $check = true;  // kiểu Boolen
        $diem = [1, 4, 7]; //kiểu mảng
    ?>

    <h1><?php echo $map; ?></h1>
    <h1><?php echo $soPi; ?></h1>
    <h1><?php echo $message; ?></h1>
    <h1><?php echo $check; ?></h1>
    <!-- đối với biến kiểu mảng cần dùng hàm var_dump để in ra màn hình -->
    <h1><?php var_dump($diem); ?></h1>

</body>
</html>