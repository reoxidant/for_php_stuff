<?php
//������ ��� �������
//�� ���� ������� ���� ��������, ��� ������� workers ����� ���� id, login, salary, age, date, description (� ������ ��� �������������).

//�� IN
//��� ������� ����� ������� ����� ��� ����������� ��������� SQL ������� � �������: IN.

//TODO 1. �������� �� ������� workers ������ � id ������ 1, 2, 3, 5, 14.
//SELECT * FROM workers WHERE id IN(1,2,3,4,5,14)

//TODO 2. �������� �� ������� workers ������ � login ������ 'eee', 'bbb', 'zzz'
//SELECT * FROM workers WHERE login IN('eee','bbb','zzz');

//TODO 3. �������� �� ������� workers ������ � id ������ 1, 2, 3, 7, 9, � �������, ������ 'user', 'admin', 'ivan' � ��������� ������ 300.
//SELECT * FROM workers WHERE id IN(1,2,3,7,9) AND login IN('user','admin','ivan') AND salary > 300

//�� BETWEEN
//TODO 4. �������� �� ������� workers ������ c ��������� �� 100 �� 1000.
//SELECT * FROM workers salary BETWEEN 100 AND 1000

//TODO 5. �������� �� ������� workers ������ c id �� 3 �� 10 � ��������� �� 300 �� 500.
//SELECT * FROM workers WHERE id BETWEEN 3 AND 100 AND salary BETWEEN 300 AND 500

//�� JOIN
//TODO 69. ���� ��� �������: ������� category � ������ id � name � ������� page � ������ id, name � category_id.
// ��������� ����� �������� ��� �������� ������ � �� �����������.

//SELECT * FROM category LEFT JOIN page ON page.category_id = category_id

//TODO 70. ���� 3 �������: ������� category � ������ id � name, ������� sub_category � ������ id � name � ������� page � ������ id, name � sub_category_id.
// ��������� ����� �������� ��� �������� ������ � �� �������������� � �����������.

/*SELECT * FROM page
LEFT JOIN category ON page.category_id = category.id
LEFT JOIN sub_category ON page.sub_category_id = sub_category.id*/


