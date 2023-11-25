<!-- khai báo : define('tenhang', 'giá tri');
sử dụng tên hằng: tenhang
dặt tên hằng:
    chứa các chữ cái chữ số, dấu gách dưới
    phân biet chu hoa, chu thường 
    nên đặt ten theo quy tắc underscore nhưng viết HOA (vidu: WEB_HOST-ROOT) haowjc thêm gạch dưới phía trướ -->

<?php 
// /khai báo hàm
define('_WEB_HOST_ROOT', 'https:hoàng.net');
echo _WEB_HOST_ROOT;

echo '<br/>';

const _WEB_PARTH_ROOT = 'D:xampp/htdocs';
echo _WEB_PARTH_ROOT;

echo '<br/>';

// làm saop để kiểm tra hăng số có tồn tại hay không
$checkDefine = defined('_WEB_HOST_ROOT');
var_dump($checkDefine);

?>
