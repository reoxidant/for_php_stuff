<?php
//����: ������ �� ����������� SQL �������

//������ �1
//������. �������� �� ������� workers ������ � id ������ 3, 5, 6, 10.

//SELECT * FROM workers WHERE id IN(3,5,6,10)

//������ �2
//������. �������� �� ������� workers ������ � id ������ 3, 5, 6, 10 � �������, ������ 'eee', 'zzz' ��� 'ggg'.

//SELECT * FROM workers WHERE id IN(1,2,4) AND login IN('eee','ggg','zzz')

//������ �3
//������. �������� �� ������� workers ������ c ��������� �� 500 �� 1500.

//SELECT * FROM workers WHERE price BETWEEN 500 AND 1500;

//������ �4.
//�������� �� ������� workers ��� ������ ���, ����� ������ id ���� workersId, ������ login � workersLogin, ������ salary - workersSalary.
//SELECT workers.id AS workersId, workers.login as workersLogin, workers.price as workersSalary FROM workers

//������ �5.
//������. ������� � ������� workers ����������� �������.

//SELECT min(workers.age) FROM workers

//������ �6
//������. ������� � ������� workers ��������� �������.

//SELECT SUM(workers.age) FROM workers

//������ �7
//������. �������� � ������� workers ������ � ����� date � ������� �������� ������� � ������� '���-�����-���� ����:������:�������'.

//INSERT INTO workers (name,date) VALUES('����', NOW())

//������ �8
//������. �������� � ������� workers ������ � ����� date � ������� ����� � ������� '���-�����-����'.

//INSERT INTO workers (name, date) VALUES('����', CURDATE())

//������ �9
//������. ��� ������� �� ������� workers �������� ����, ����� � ��� � ��������� ����.

/*SELECT EXTRACT(DAY FROM date) AS day,
    EXTRACT(MONTH FROM date) AS month,
    EXTRACT(YEAR FROM date) AS year
FROM workers*/

//������ �10
//������. �������� �� ������� workers ������, � ������� ������ ������ ������.

//SELECT * FROM workers WHERE HOUR(date) > SECOND(date)

//������ �11
//������. ��� ������� �� ������� workers ��������� � ���� 1 ���.

//SELECT DATE_ADD(date, INTERVAL - 1 YEAR) as date FROM workers
//���
//SELECT date + INTERVAL 1 YEAR as date FROM workers

//������ �12
//������. ��� ������� �� ������� workers �������� �� ���� 1 ���.

//SELECT DATE_ADD(date, INTERVAL - 1 YEAR) as date FROM workers
//���
//SELECT date - INTERVAL 1 YEAR as date FROM workers

//������ �13
//������. ��� ������� �� ������� workers ��������� � ���� 3 ����, 4 ������.

//SELECT DATE_ADD(date, INTERVAL '3:4' YEAR_MONTH) as date FROM workers
//���
//SELECT data + INTERVAL 3 YEAR + INTERVAL 4 MONTH as date FROM workers

//������ �14
//������. ��� ������� �� ������� workers ��������� � ���� 3 ��� � �������� 2 ����.

//SELECT + INTERVAL 3 DAY - INVERVAL HOUR 2 FROM workers
