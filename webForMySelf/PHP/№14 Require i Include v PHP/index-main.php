<?php

//error_reporting(-1);

error_reporting(E_ALL);
//��������� ��� ������.
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
//������� ��� ������, ����� ������ E_NOTICE � E_WARNING

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium at aut earum, enim eos fuga iure laboriosam
    minus mollitia natus nihil nostrum optio quod soluta tempore ullam ut vitae voluptatibus?</p>
        <?php //include 'inc.php'; ?>
        <?php //include 'inc.php'; ?>
        <!--
        ��� ������� ����������� ������ ����.
        -->
        <?php //include 'inc.php'; ?>
        <!--
        ���� ���� ������ �� � ������ ���������� ��������� ������ Warning, �� ��� �� �������� �� ������ �����.
        -->

        <?php require 'inc.php'; ?>
        <!--
        ���� ���� ������ �� � ������ ���������� ��������� ������ Fatal Error, �������� ����� ������ �� �����������.
        -->

        <?php require_once 'inc.php'; ?>
        <!--
        ��������, ����������� �� ����, ���� �����������, �� �� ����� �������������.
        -->

         <?php var_dump($names); ?>
    <p>Amet aperiam asperiores aspernatur blanditiis consectetur consequatur dicta doloremque dolorum eaque explicabo, fuga
    fugit hic id ipsa iste iure maxime minus natus nesciunt omnis praesentium quas sed similique velit vero!</p>
</body>
</html>
