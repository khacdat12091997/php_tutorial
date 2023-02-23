<?php
/*
Hàm trong PHP
- Hàm còn gọi là function, dùng để thực hiện 1 chức năng gì đó, chức năng này
được dùng nhiều lần, ở nhiều file trong code thì ta viết thành 1 hàm chung và gọi
ra mỗi lần sử dụng

ví dụ: viết hàm tính tổng 2 số
- cần xác định các biến số đầu vào: input
- cần xác định kết quả trả về: output
*/

function tinhTongHaiSo($a, $b) {
    $tong = $a + $b;
    return $tong;
}

// trong hàm trên, đầu vào là 2 biến $a, $b
// đầu ra là tổng 2 số

//giờ thử gọi hàm tính tổng

$ketqua = tinhTongHaiSo(2, 5);
echo $ketqua; // kết quả 7
echo '<pre>';

/*
- Có thể gán các giá trị mặc định cho các biến số đầu vào của hàm
- mục đích là nếu không truyền giá trị cho tham số, hàm sẽ lấy giá trị mặc định của tham số đó
- ví dụ ta gán cho biến $chuoi2 một giá trị mặc định là .
*/

function ghepChuoi($chuoi1, $chuoi2 = '.') {
    return $chuoi1 . $chuoi2;
}

//gọi hàm và không truyền vào tham số thứ 2
$test = ghepChuoi("Haha");
echo $test; //kết quả?
echo '<pre>';

// gọi hàm và truyền vào tham số thứ 2
$test2 = ghepChuoi("Haha", "Marid"); // kết quả ?
echo $test2; //kết quả?
echo '<pre>';


// trong thực tế, code PHP luôn phải viết hàm, có thể hàng trăm hàm