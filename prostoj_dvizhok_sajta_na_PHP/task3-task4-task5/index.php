<?php
//����: ������� include � GET ������

/*������ 3: ���� ����� 1.php, 2.php, 3.php. �������� ���, ����� �� �������� index.php � ������� GET-������� ����������� ���� �� ������. GET-���������� ����������� ��� ������������� ����� ������ � �����������.*/
/*    $page = $_GET['page'];
    c*/

/*������ 4: ������������� ���������� ������ ���, ����� � GET-�������� ����������� ������ ����� �� ����� �����, ��� ����������.*/

/*$page = $_GET['page'];
if(is_numeric($page)):
    include("pages/$page.php");
else:
    include("pages/$page");
endif;*/

/*������ 5: ������������� ���������� ������ ���, ����� ������������ ����� ��������� � ����� dir.*/
if(!is_dir('dir')){
    mkdir('dir');
}

$page = $_GET['page'];
if(is_numeric($page)):
    $path = "pages/$page.php";
    include("$path");
    $content = file_get_contents("$path");
    file_put_contents('dir/'.$page.'.php', "$content");
else:
    $path = "pages/$page";
    include("$path");
    $content = file_get_contents("$path");
    file_put_contents('dir/'.$page, "$content");
endif;

?>


