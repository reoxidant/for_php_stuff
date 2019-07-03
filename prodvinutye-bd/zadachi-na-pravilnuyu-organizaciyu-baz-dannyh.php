<?php
//������ ��� �������

/*� ������� ������� ����� ��� ���������� �������� ��������������� ������� � ���� � ���� ��������.
����� �������� ������� �� ���� �������� (���� ��� ������� � ������).
� ������� �� ������ ������� ������� ��������� �������: �������1(����1, ����2...), �������2(����1, ����2...).*/

//������� ����������

/*1. ����� (��������, ����, ����������), ��������� ������.
�������: (1) ������� ������ ������ � �����������,
TODO (2) ������� ������ �� ��������� '�����',
TODO (3) ������� ������ �� ��������� '�����', '����', '������������',
TODO (4) ������� ��� ��������� (��� �������, ������ �������� ���������),
TODO (5) ������� ��� ���������, � ������� ���� ������ (��� �������, ������ �������� ���������, ��� ������).*/

/*1. SELECT product.name, product.price, product.count
FROM product
LEFT JOIN category ON product.category_id = category.id;*/

/*2. SELECT * FROM goods
INNER JOIN category
ON
goods.category_id = category.id
WHERE category.name = '�����';*/

/*3. SELECT * FROM goods
INNER JOIN category
ON
goods.category_id = category.id
WHERE category.name IN('�����','����','������������'); */

//4.  SELECT category.name FROM category

/*5. SELECT DISTINCT category.name FROM category
INNER JOIN goods
ON
category.id = goods.category_id*/

/*2.  ����� (��������, ����, ����������), ������������ ������, ��������� ������.
����� ����������� ������������, ������������ � ���������.
������: ��������� ����� (�����), �������� (������������), ����� (���������).
�������:
TODO (1) ������� ������ ������ � �������������� � �����������,
TODO (2) ������� ������ �� ������������ '��������',
TODO (3) ������� ��� ������������ ��������� '�����'.*/

/*1. SELECT * FROM goods
JOIN
subcategory
ON goods.subcategory_id = subcategory.id
JOIN
category
ON subcategory.category_id = category.id*/

/*2. SELECT * FROM goods
INNER JOIN subcategory
ON goods.subcategory_id = subcategory.id WHERE subcategory.name = '��������'*/

/*3. SELECT * FROM subcategory
INNER JOIN
category
ON subcategory.category_id = category.id
WHERE category.name = '�����'*/

/*3. �����, ���������, �����, �����. ����� ����������� ���������, ������ � ������.
�������:
//TODO (1) ������� ������ � �� ����������, ������� � �������, (2) ������� ��� ������. */

//1.
/*SELECT * FROM goods
LEFT JOIN category
ON goods.category_id = category.id
LEFT JOIN warehouse
ON category.warehouse_id = warehouse.id
LEFT JOIN brand ON warehouse.brand_id = brand.id*/

//2.
//SELECT * FROM warehouse

/*4. �����, ������������, ���������, �����, �����.
��������� 3 ����� �� �������, ������������ ����������� ��������� (��������, �������� ������).
TODO �������: (1) ������� ������ � �� ������������� � ����������, ������� � �������. */

/*1)
SELECT * FROM goods
JOIN LEFT subcategory ON goods.id_subcategory = subcategory.id
JOIN LEFT category ON subcategory.id_category = category.id
UNION SELECT * FROM warehouse UNION SELECT * FROM brand*/

/*5. ������������, ��� �����.
�������:
TODO (1) ������� ������������� ������ � �� �������,
TODO (2) ������� ��� ������,
TODO (3) ������� ���� ������������� �� ������ �����,
TODO (4) ������� ��� ������, � ������� ���� ������������,
TODO (5) ������� ��� ������, � ������� ��� �������������,
TODO (6) ������� ������ ������� � ����������� ������������� � ���,
TODO (7) ������� ������ �������, � ������� ���������� ������������� ������ ����. */

/*1) SELECT * FROM users
JOIN LEFT city ON users.id_city = city.id*/
//2) SELECT * FROM city
//3) SELECT * FROM user JOIN LEFT city ON user.city_id = city.id WHERE city.name = '�����'
//4) SELECT * FROM user JOIN LEFT city ON user.city_id = city.id WHERE user.city_id IN NOT NULL
//5) SELECT * FROM user JOIN LEF city ON user.city_id = city.id WHERE user.city_id IS NULL
//6) SELECT city.name, COUNT(user.city_id) AS cityUsers FROM city RIGHT JOIN user ON city.id = user.city_id
//7) SELECT city.name, COUNT(user.city_id) as cityUsers FROM city JOIN RIGHT user ON city.id = user.city_id WHERE COUNT(user.city_id) > 3

/*6. ������������, ��� �����, ������.
�������:
TODO (1) ������� ���� ������������� ������ � �� ������� � �������,
TODO (2) ������� ��� ������ � �� ��������,
TODO (3) ������� ���� ������������� �� ������ �������� (��� �������),
TODO (4) ������� ���� ������������� �� ������ ����� (��� ������),
TODO (5) ������� ������ ����� � ����������� ������������� � ���. */

/*1) SELECT * FROM user
JOIN LEFT city
ON
user.city_id = city.id
JOIN LEFT
country
ON city.county_id = county.id*/

/*2) SELECT city.name, country.name FROM city
JOIN LEFT country
ON city.country_id = country.id*/

/*3) SELECT county.name FROM user
JOIN LEFT city
ON user.city_id = city.id JOIN LEFT county ON city.country_id = country.id WHERE country.name = '��������'*/

//4) SELECT user.name, city.name FROM user JOIN LEFT city ON user.city_id = city.id WHERE city.name = '�����'

/*5) SELECT country.name, COUNT(city_id) FROM user
LEFT JOIN city ON user.city_id = city.id LEFT JOIN country ON city.country_id = country.id*/