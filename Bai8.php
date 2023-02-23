<?php
/*
Câu lệnh SWITCH trong PHP

- Khi có 1 giá trị, và giá trị này chỉ có thể rơi vào một số giá trị nhất định
- Dùng switch để xử lý code
- ví dụ: In ra tên thành phố theo biển số xe máy
*/

$bienSoXe = 100;
switch ($bienSoXe) {
    case 36:
        echo $bienSoXe . " là tỉnh Thanh Hóa";
        break;
    case 37:
        echo $bienSoXe . " là tỉnh Nghệ An";
        break;
    case 29:
    case 30:
        echo $bienSoXe . " là tỉnh Hà Nội";
        break;
    case 98:
        echo $bienSoXe . " là tỉnh Bắc Giang";
        break;
    default:
        echo $bienSoXe . " không xác định";
}

// thử thay đổi giá trị biến $bienSoXe và xem kết quả
// nếu giá trị biến không đúng với case nào của switch, nó sẽ lấy default
// ví dụ thử đặt $bienSoXe = 100
