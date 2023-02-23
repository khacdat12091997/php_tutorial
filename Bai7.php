<?php
// Câu lệnh IF trong PHP
/* 
- Câu lệnh if dùng để kiểm tra 1 điều kiện và thực hiện lệnh mong muốn nếu điều kiện đúng
- Nếu IF kết hợp với ELSE thì khi điều kiện sai, câu lệnh trong vế ELSE sẽ được chạy
- ví dụ: kiểm tra 1 số nếu chia hết cho 2 thì là số chẵn


*/
$a = 5;
if ($a % 2 == 0) {
    echo $a . " là số chẵn";
} else {
    echo $a . " không là số chẵn";
}

/*
- Khi cần kiểm tra nhiều điều kiện, dùng elseif
ví dụ: tính tiền điện hàng tháng theo quy tắc
- nếu số điện < 10, giá 1 số điện là 1000
- nếu số điện từ 10 - 50, giá 1 số điện là 2000
- nếu số điện lớn hơn 50, giá 1 số điện là 3000
*/
$soDien = 15;
if ($soDien < 10) {
    echo $soDien . " Tiền điện là: " . $soDien * 1000;
} else if ($soDien <= 50) {
    echo $soDien. " Tiền điện là: " . $soDien * 2000;
} else {
    echo $soDien . " Tiền điện là: " . $soDien * 3000;
}

