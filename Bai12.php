<?php

//Hàm sắp xếp mảng

//1. sort
// sắp xếp mảng theo thứ tự thấp đến cao
echo '<pre>';
$mangSo = [2,4,1,5,8,6,7];
sort($mangSo);
print_r($mangSo); 
echo '<pre>';


//2. rsort
// sắp xếp từ cao xuống thấp
rsort($mangSo);
print_r($mangSo); 
echo '<pre>';

//sắp xếp mảng chữ A-Z
$mangChu = ['Haha', 'Aka', 'Beta'];
sort($mangChu);
print_r($mangChu);

echo '<pre>';

//sắp xếp mảng chữ Z-A
rsort($mangChu);
print_r($mangChu);