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
       Toán tử là các dấu thể hiện phép tính toán hoặc so sánh giữa các biến trong PHP

       Ví dụ: + - * /,
            &&  toán tử và logic,
            ||  toán tử hoặc logic,
            ! toán tử nghịch đảo, phủ định,
     -->

    <?php
        $a = 100;
        $b = 40; 
        $tong = $a + $b;
        $hieu = $a-$b;
    ?>

    <h1><?php echo $tong; ?></h1>
    <h1><?php echo $hieu; ?></h1>

</body>
</html>