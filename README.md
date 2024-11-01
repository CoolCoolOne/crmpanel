<p align="center">
    <h1 align="center">CRM-панель демо-проект</h1>
    <br>
</p>

Тестовое задание. Задача: разработать мини-приложение для управления офферами.
Это приложение должно позволять создавать, редактировать, удалять и просматривать
записи с информацией об офферах. 
<br>
требования по функционалу в файлике "задание.pdf" в корне проекта


УСТАНОВКА НА ЛОКАЛЬНЫЙ СЕРВЕР
------------

1 Нужна сборка (например xampp) с соблюдением требований как к basic yii2 (версия php и расширения php.ini)
2 Клонируйте репозиторий 
3 Выполните composer update в папке проекта
4 создайте базу данных и заполните её (пример скрипта указан ниже)
5 сконфигурируйте подключение к базе данных в config/db
6 перейдите по ссылке http://'localhost'/web/index.php ('localhost' = как вы настроете)


Код для SQL
------------
CREATE TABLE crmpanel.offers (id INT(11) NOT NULL AUTO_INCREMENT , name VARCHAR(256) NOT NULL , email VARCHAR(256) NOT NULL , phone VARCHAR(15) NULL , date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (id)) ENGINE = InnoDB;
------------
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Заявка от компании', 'test@client.ru', +71234560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'проблемы с чем-то', 'test@mail.ru', +71234590102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Всё работает но..', 'testSome@ya.ru', +71934560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Кошки', 'cat@client.ru', +71234560109, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Собачки', 'dog@client.ru', +72234560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Птицы', 'birb@client.ru', +71237560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Рыбы', 'fishes@client.ru', +71236560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'медведь', 'bear@client.ru', +71235560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Самолёт', 'airplane@client.ru', +71234500102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Вертолёт', 'airplane22@client.ru', +72234560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Песенки', 'songs@client.ru', +71235560102, current_timestamp());
INSERT INTO offers (id, name, email, phone, date) VALUES (NULL, 'Картинки', 'pictures@client.ru', +71234533302, current_timestamp());


Архитектурные и функциональные решения
------------

1 Использован шаблон yii2 basic
2 Создана модель и CRUD модули с помощю Gii
3 Настроена валидация с помощью yii2 библиотек и сторониих виджетов (для телефона)
4 для фильрации и сортировки настроен gridwiev
5 внешний вид сделан с помощью bootstrap, кастомные стили не понадобились
6 большая часть операций реализована через ajax (yii2 Pjax)
7 код не комментируется, кроме самодокументирования именами классов, переменных, методов

Соображения по доработке
------------

1 настроить htacess
2 вынести фильтрацию на отдельную страницу
3 сделать редактирование оффера при клике на всё поле



Внешний вид
------------