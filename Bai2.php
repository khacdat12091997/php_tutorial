<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hằng số trong PHP</title>
</head>
<body>
    <!-- 
       1 Hằng số là 1 biến đặc biệt, giá trị của nó không bao giờ bị thay đổi trong quá trình code
       2 Khi sử dụng hằng số, không cần đặt dấu $ đằng trước tên hằng số như biến thông thường
     -->

    <?php
        const soPi = 3.14;
        const message = 'Thành công';
    ?>

    <h1><?php echo message; ?></h1>
    <h1><?php echo soPi; ?></h1>
    
    <!-- Bài tập
        Khai báo một hằng số mang giá trị là 100;
    -->
    <h2>Bài làm</h2>

</body>
</html>