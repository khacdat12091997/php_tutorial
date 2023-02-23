<!-- 
    OOP:  (Object Oriented Programming
    Object: đối tượng,
    Oriented: hướng,
    Programming: lập trình
    - OOP là lập trình hướng đối tượng

1. Đối tượng
- Đối tượng là đại diện cho 1 chủ thể cụ thể nào đó trong lập trình,
ví dụ: học sinh A, là 1 đối tượng, có các đặc điểm như có tên tuổi, giới tính, ngày sinh,... trong lập trình gọi là các thuộc tính
học sinh A có khả năng ăn, nói, chạy, yêu đương,... trong lập trình gọi là các phương thức

2. Class
- Class gọi là lớp, có thể hiểu là 1 khuôn mẫu, đại diện cho các đối tượng có chung thuộc tính, phương thức
ví dụ: lớp học sinh: có học sinh A hát hay nhưng xấu trai, học sinh B hát dở nhưng đẹp trai,...
tức là A và B đều là các đối tượng học sinh, có chung các đặc điểm như đều biết hát, nhưng khác nhau ở hay và dở... do đó đều thuộc lớp học sinh


Trong lập trình, để mô tả các thực thể trong thực tế đời sống, cần đến đối tượng và lớp.
-->

<?php

// khai báo 1 lớp học sinh
class hocsinh {
    // khai báo các thuộc tính của đối tượng
    protected $ten;
    protected $tuoi;


    // khai báo các phương thức của đối tượng

    // lấy tên đối tượng
    // chú ý, $this là 1 từ khóa đặc biệt trong 1 class, đại diện cho object của chính class đó, có thể trỏ đến bất kì thuộc tính hay phương thức nào của class
    // ví dụ $this->ten sẽ trỏ đến thuộc tính $ten của đối tượng hocsinh

    public function getName()
    {
        return $this->ten;
    }

    public function setName($name)
    {
        return $this->ten = $name;
    }
}

// thử khởi tạo 1 đối tượng từ class hocsinh 

$hocSinh1 = new hocsinh(); 

//lúc này, $hocsinh1 là 1 biến kiểu object, nó là đối tượng của lớp hocsinh, nó có các thuộc tính và phương thức của lớp hocsinh

// thử lấy tên của hocsinh1 xem, bằng cách gọi phương thức getName
$tenHocSinh1 = $hocSinh1->getName();
var_dump($tenHocSinh1);
echo '<pre>';
// kết quả trả về là gì? mở trình duyệt lên xem


// trả về NULL, vì sao? do chưa gán tên cho đối tượng hocSinh1 

$hocSinh1->setName("Đạt khắc");

// lấy lại tên xem
$tenHocSinh1 = $hocSinh1->getName();
var_dump($tenHocSinh1);
// kết quả trả về là gì? mở trình duyệt lên xem


//  vậy tại sao ban đầu khi khởi tạo đối tượng hocSinh1, tên lại trả về NULL
// do khi khởi tạo đối tượng, chưa set tên cho đối tượng 
// Class có 1 hàm đặc biệt, gọi là hàm tạo _construct(), để làm thứ gì ta muốn khi class được khởi tạo
// giờ ta viết 1 class khác với hàm tạo được khai báo nhé

class hocsinhmoi {
    protected $ten;
    protected $tuoi;

    public function __construct($tenBanDau)
    {
        // khởi tạo giá trị ban đầu cho biến $ten
        $this->ten = $tenBanDau;
    }

    public function getName()
    {
        return $this->ten;
    }

    public function setName($name)
    {
        return $this->ten = $name;
    }
}


//giờ tạo lại đối tượng học sinh theo class hocsinhmoi nhé
// ta sẽ truyền ngay tên đối tượng ta cần khởi tạo vào tham số của class
$hocsinh2 = new hocsinhmoi("Đạt nghiện");

//giở thử lấy tên đối tượng ra nhé
$ten = $hocsinh2->getName();
var_dump($ten);