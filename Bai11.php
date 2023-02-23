<?php
/*
- Mảng chứa các giá trị cùng tính chất
- Trong PHP, thường dùng mảng 2 chiều
- Ví dụ: $mangSo = [1,2,3];
*/

$scores = [1, 2, 3];
var_dump($scores); // mảng ko dùng với echo
echo '<pre>';

// 1,2,3 là các giá trị của mảng
// php quy định ngầm 0,1,2 là chỉ số của các giá trị 1,2,3 trong mảng
// mảng cũng có thể tự định nghĩa key

$mangKey = ['tuoi' => 15,'ten' => "Nam",];

// trong mảng trên, tự định nghĩa 2 key là tuoi và ten
// để lấy giá trị các giá trị theo key như sau
$tuoi = $mangKey['tuoi'];
$ten = $mangKey['ten'];

echo $ten ;
echo '<pre>';
echo $tuoi ;
echo '<pre>';

/*
Đặc biệt, mảng có thể lồng mảng
*/
$mangLong = [
    [1,2,3],
    ["ten" => "Nam", "tuoi" => 18]
];

var_dump($mangLong);
echo $mangLong[1]['ten']; // Nam