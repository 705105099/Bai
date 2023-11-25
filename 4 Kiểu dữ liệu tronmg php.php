<!-- Các kiểu 
INT
SỐ THỰC
STRING
BOOLEAN 
MẢNG 
 NULL 
RESOURCE 
ĐỐI TƯỢNG (ObJECT) -->

kiểu dữ lieu int 

<?php
// 1. kiểu số nguyên int 
// khai báo

$age= 30;
//ép kiểu
$age= (int)$age;
// keirem tra kiểu số nguyên
$check = is_int($age);
$check = is_integer($age);
// var_dump($check);
// 2. kiểu Boolean (logic)
$check= false;
// var_dump($check);
//kiểm tra biesn có phải kiểu boolean ko
// $check = 2;
// $check= (bool)$check;
// $checkBool= is_bool($check);
// var_dump($checkBool);
// echo '<br/>'

// ép kiểu dữ liệu dùng từ khóa true hoặc các ký tự: 0, trống, null đẻ quy về false, ngược lại true

// 3. kiesui sô thực ( float)
$fee= 10.5;
var_dump($fee);
//ép kiểu dùng cái
$fee= (float)$fee;
var_dump($fee);
echo '<br/>';
var_dump(is_float($fee));


// 4. kiểu chuỗi (string)
// khai báo: $ten_bien= 'chuôi'; hoặc $ten_bien= "Chuoi";
// kiểm tra chuỗi: is_string($ten_bien);
$meseage=10;
$meseage=(string)$meseage;
$meseage = 'đây la thông báo';
$checkString= is_string($meseage);
// var_dump($meseage);
// echo '<br/>';
// var_dump($checkString);

// 5. kiểu mảng (array)
$carArr= [];
$carArr=(array)$carArr; //ép kiểu
$checkArr= is_array($carArr);

// var_dump($carArr);
// echo '<br/>';
// var_dump($checkArr);


// 6. kiểu dữ liệu rỗng (Null)
$total= null;
$total= (int)$total;

$checknull= is_null($total);

// var_dump($total);
// var_dump($checknull);

// 7. kiểu dữ liệu RESOUSE

$curl= curl_init();
$checkType = get_resource_type($curl);
// var_dump($curl);
// echo '<br/>';
// var_dump($checkType);


// 7. kiểu dữ liệu đói tượng (OBJECT)
$dataCustomer=['quynh'];
$dataCustomer=(object)$dataCustomer; //ép kiểu
$checkObject= is_object($dataCustomer);
// var_dump($dataCustomer);
// echo '<br/>';
// var_dump($checkObject);


$custumerObject = new stdClass();
$custumerObject->age=33;
var_dump($custumerObject);