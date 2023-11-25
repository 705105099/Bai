<!-- 
nối biến trong php
muốn nối hai biến lại vơi nhau -->
<?php
$str1 = 'dddd';
$str2 = 'cccc';
// nối biên và hiển thị
echo $str1.$str2;

echo $str1.'học cùng'.$str2.'<br/>';

//nối và gáns
$str= $str1.''.$str2.'<br/>';
echo $str;


$str= 'trung tâm đào tạo'.$str2;
echo $str;
echo  '<br/>';

//nếu dùng dấu nháy "" đưa luôn vào dấu nháy ko cần dấu chấm
$str= "trung tâm đào tạo $str2 tại hHn";
$str= "trung tâm đào tạo {$str2}tại hHn";
echo $str;

echo '<br/>';



// <!-- caschs khac -->

$url = 'https://quynh.net';
$imgUrl= 'https://yt3.ggpht.com/8xVsdl1GgIFN5DxzVpbysvsnG6WtzvgRUk6-QdpH4aYAuqVaaLysEB3libBBHnuo_icTHsX4Bg=s88-c-k-c0x00ffffff-no-rj';
$htmlOutput= '<a href="'.$url.'"><img src ="'.$imgUrl.'"/></a>';

echo $htmlOutput;
echo '<br/>';
?>
<a href="https://quynh.net"><img src ="https://yt3.ggpht.com/8xVsdl1GgIFN5DxzVpbysvsnG6WtzvgRUk6-QdpH4aYAuqVaaLysEB3libBBHnuo_icTHsX4Bg=s88-c-k-c0x00ffffff-no-rj"/></a>
<?php
$number = '120';
$str = 'dao tao Bk';
$total = $number.$str;// nói
var_dump($total);//kiểu chuỗi
?>