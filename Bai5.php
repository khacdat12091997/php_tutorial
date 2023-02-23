<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toán từ trong PHP</title>
</head>
<body>
    <!-- 
       - Toán tử là các dấu thể hiện phép tính toán hoặc so sánh giữa các biến trong PHP
    - Dấu = cũng là một toán tử mang ý nghĩa gán giá trị cho biến
    - Dấu == được hiểu là so sánh =


       Ví dụ: + - * /,
            &&  toán tử và logic,
            ||  toán tử hoặc logic,
            ! toán tử nghịch đảo, phủ định,
     -->

    <?php
        $a = 100;
        $a = $a +1;
        $a += 1; // $a = $a + 1
        $a -= 1; // $a = $a - 1
        $b = 40; 
        $b *= 40;  //$b = $b ** 40
        $tong = $a + $b;
        $hieu = $a-$b;
        $tich = $a * $b;
        $thuong = $a / $b;

        $str1 = "Hello";
        $str2 = "Nam";
        $chuoi = $str1 . ' ' . $str2; //dùng .= để nối chuỗi và gán luôn vào 1 biến
        $str1 .=  ' ' .$str2;
    ?>

    <h1><?php echo $tong; ?></h1>
    <h1><?php echo $hieu; ?></h1>
    <h1><?php echo $tich; ?></h1>
    <h1><?php echo $thuong; ?></h1>
    <h1><?php echo $chuoi; ?></h1>
    <h1><?php echo $str1; ?></h1>

</body>
</html>