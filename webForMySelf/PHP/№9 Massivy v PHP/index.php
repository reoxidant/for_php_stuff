<?php

error_reporting(-1);

$arr = array('Ivanov', 'Petrov', 'Sidorov');
//var_dump($arr);

//echo $arr;
/*echo "<pre>";
print_r($arr);
echo "</pre>";*/

//��������� �� ����� � ���������� ��������� ���� � ��������
/*echo $arr[1];
echo $arr{1};*/

//��� ��������� � ������
/*$var = 'Ivanov';
$var = 2;
echo $var;*/

//������ � ������� �������. ���� ������ ������ � ������ ������ - ��� ����������� ������.
$arr2 = [
    1,
    2,
    [
        'banana',
        'orange',
        'apple'
    ],
    4,
    5,
    'cat',
    6,
    7,
    8,
    'dog'
];

/*echo "<pre>";
print_r($arr2);
echo "</pre>";*/

//��������� � �������� � ����������� ������� �� �����.
//echo $arr2[3][1];

//$arr3 = [2 =>'Ivanov', 3 => 'Petrov', 4 => 'Sidorov'];
//php ��� ��������� ���������.
/*$arr3 = [
     2 =>'Ivanov',
    'Petrov',
    'Sidorov'
];*/
$arr3 = [
     2 =>'Ivanov',
     4 =>'Petrov',
     10=>'Sidorov',
    'Pupkin'  //11 ���� ��� ����������� ���
];
/*echo '<pre>';
print_r($arr3);
echo '</pre>';
echo $arr3[4];*/


//������������� ������, ���� �� �����, � ������.

$goods = [
    [
        'title' => 'nokia',
        'price' => 100,
        'description' => 'Description'
    ],
    [

        'title' => 'iPad',
        'price' => 200,
        'description' => 'Description'
    ]
];

/*echo '<pre>';
print_r($goods);
echo '</pre>';

echo $goods[0]['title'].' - '.$goods[0]['price'];
echo '<br>';
echo $goods[1]['title'].' - '.$goods[1]['price'];*/


//�������� ������� - ������� � ����� ������ ������� goods
/*$i = 0;
while($i < count($goods)){
    echo $goods[$i]['title'] - $goods[$i]['price'] - $goods[$i]['description'];
    echo '<br>';
    $i++;
}*/




