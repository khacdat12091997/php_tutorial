<?php

// 1. hiểu về đúng sai trong PHP: true hay false
// PHP quy định các giá trị sau là sai:

// từ khóa false
// NULL
// chuỗi rỗng : "", ''
// số nguyên 0
// số thực 0.0
// mảng rỗng []

// các giá trị còn lại là đúng


//1. Toán tử so sánh trong PHP

// So sánh bằng ==
// So sánh không bằng <>, !=
// So sánh bằng cả giá trị và kiểu dữ liệu ===
// So sánh không bằng cả giá trị và kiểu dữ liệu !==
// so sánh lớn hơn >
// so sánh lớn hơn hoặc bằng >=
// so sánh bé hơn <
// so sánh bé hơn hoặc bằng <=

// ví dụ

var_dump(5 == 5);
var_dump(5 == "5");
var_dump(5 === "5");
var_dump(5 > 6);
var_dump(5 != 6);


//3. Toán từ so sánh logic trong PHP

// toán tử && logic
// toán tử && gọi là toán tử và, hoặc toán tử and
// chỉ trả về đúng khi 2 vế đều trả về đúng
// ví dụ:

var_dump( 5 == 7 && 3 > 2); // vế 5 == 7 trả về sai, vế 3 > 2 trả về đúng , do đó phép && trả về sai
var_dump( 5 > 1 && 3 > 2); // đúng


// toán tử hoặc logic ||
// trả về đúng khi có ít nhất 1 điều kiện đúng
var_dump( 3 > 2 || 3 == 5); // đúng
var_dump( 3 < 2 || 3 == "3"); // đúng
var_dump( 3 < 2 || 3 === "3"); // sai


// 4. Toán tử phủ định !
var_dump(!8); // false
var_dump(!0); // true
var_dump(!false); // true
var_dump(!true); // false


//4. bài tập: điền đúng sai vào comment sau

var_dump( 1 + 2 > 5); //...
var_dump( 3 == "3"); //...
var_dump( 3 === "3"); //...
var_dump( 3 !== "3"); //...
var_dump( 3 && "3"); //...
var_dump( 0 && 1); //...
var_dump( 2 > 3 || 1); //...

$a = [];
var_dump( $a); //...
var_dump( !$a); //...
