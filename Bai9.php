<?php
/*
Vòng lặp: FOR trong PHP
- Khi cần thực hiện một công việc tương tự nhau, chỉ khác dữ liệu mỗi lần
- Dùng vòng lặp for
- ví dụ: in ra các giá trị trong một mảng số [1,2,3,4,5]
- Phân tích: cần lặp qua từng giá trị trong mảng, và in ra giá trị đó. Công việc in ra được lặp đi lặp lại, chỉ khác nhau mỗi lần lặp là giá trị in ra
*/

$mangSo = [1,2,3,4,5];
// chú ý, phần tử đầu tiên của mảng bắt đầu từ chỉ số 0
for ($i = 0; $i < count($mangSo); $i++) {
    echo $mangSo[$i];
}


/*Bài tập
Giờ thử sửa đoạn code, thêm câu lệnh if trong vòng for để chỉ in ra những phần tử chia hết cho 2
*/

for ($i = 0; $i < count($mangSo); $i++) {
    // if (...) {
    //    ....
    // }
}

// PHP có một câu lệnh foreach tương tự như for

foreach ($mangSo as $key => $so) {
    //$key là chỉ số của phần tử trong mảng
    //$so là giá trị của phần tử trong mảng
    echo $so;
}
// sau khi chạy đoạn lệnh trên kết quả là 12345
// trong thực tế, dùng foreach nhiều hơn for

/*
Lệnh BREAK trong vòng lặp
Nếu muốn dừng vòng lặp ngay lập tức, dùng lệnh break
ví dụ: tìm số đầu tiên của mảng chia hết cho 2
*/

foreach($mangSo as $key => $so) {
    if ($so % 2 == 0) {
        echo $so;
        break;
    }
}
// kết quả đoạn trên chỉ in ra số 2


/*
Lệnh CONTINUE trong vòng lặp
Nếu muốn bỏ qua 1 phần tử của mảng khi lặp mà không quan tâm các lệnh phía dưới, dùng continue
ví dụ: in ra màn hình các số lớn hơn 2 và chia hết cho 2
*/
foreach($mangSo as $key => $so) {
    if ($so <= 2) {
        continue;
    }

    if ($so % 2 == 0) {
        echo $so;
    }
}

// kết quả đoạn trên chỉ in ra số 4

