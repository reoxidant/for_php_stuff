<?php

//Notice ������
error_reporting(-1);

$title = 'hello world';
$title = 'page title';
$fruit = 'apple';
//$�����_��� = 'Hello, I\'m Winnie';
//$winnie_pooh = 'Hello, I\'m Winnie';
//CamelCase
//$winnieThePooh = 'Hello, I\'m Winnie';

$winnie_pooh = 'Hello, I\'m Winnie I have 2 '.$fruit.'s';

//��������� � ��������� ������� �� ��������
$var = '123';
$Var = '456';


//���c�����.
define("PAGE", "new page");

//������ ��������������.
//define("PAGE", "new page_2");

//�������� � ������ 5.4
const PAGE2 = 'new const';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
</head>
<body>
    <h1><?php echo PAGE;?></h1>
<!--    <p>--><?php //echo $�����_���;?><!--</p>-->
    <p><?php echo $winnie_pooh;?></p>
    <p><?php echo $var;?></p>
    <p><?php echo PAGE2;?></p>
</body>
</html>