<?php

error_reporting(-1);

//��� ������������ � php, ������� ������.
//$this = "123";

//php - ������������������� ���� ����������������

$var = 'pencil';
$is_auth = false;

/* ���� ������:
 * boolean true | false - ���������� ���������
 * integer
 * float
 * string
 */
//��� true ��������� 1, ��� false = "��������� ������"
$var = false;
//echo $var;
//var_dump($var); //�������� ����
//gettype($var); // ������ ���� ����������, ����������� �����.

//$int = 123; //Integer
//$int = '123'+100; //String
//var_dump($int);


//php �������������� ��� ������, ������� ������ � ����� ����� ��� ����� + �����.
/*
$fl = 1.2; //float
//$fl = 1,2; //������� � ����� ������� ������.
var_dump($fl);
*/
$var = 10;
//� ��������� �������� ���������� �� ��������������.
//$str = 'This is \'string\'. $var';
// - \' - �������� ������ ������������ ������.
//� ������� ��������������
//$str2 = "This is string. {$var}s";
//����������� ��������� �������� ���������.

//$str2 = "This is string. \$var";
//$str2 = "This \"is\" \"string\". $var";

//HEREDOC ��� ������� �������
$str3 = <<<HERE
This "is" 'string' $var
HERE;


//NOWDOC ��� ��������� �������


$str3 = <<<'HERE'
This "is" 'string' $var
HERE;

var_dump($str3);
?>