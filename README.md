<p align="center">
    <h1 align="center">CRM-панель демо-проект</h1> <br>
    
</p>
<br>
Тестовое задание. Задача: разработать мини-приложение для управления офферами.
Это приложение должно позволять создавать, редактировать, удалять и просматривать
записи с информацией об офферах. 
<br>
требования по функционалу в файлике "задание.pdf" в корне проекта


УСТАНОВКА НА ЛОКАЛЬНЫЙ СЕРВЕР
------------

1 Нужна сборка (например xampp) с соблюдением требований как к basic yii2 (версия php и расширения php.ini) <br>
2 Клонируйте репозиторий  <br>
3 Выполните composer update в папке проекта <br>
4 создайте базу данных и заполните её (пример скрипта указан ниже) <br>
5 сконфигурируйте подключение к базе данных в config/db <br>
6 перейдите по ссылке http://'localhost'/web/index.php ('localhost' = как вы настроете) <br>


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

1 Использован шаблон yii2 basic <br>
2 Создана модель и CRUD модули с помощю Gii (доработаны в ручную) <br>
3 Настроена валидация с помощью yii2 библиотек и сторониих виджетов (для телефона) <br>
4 для фильрации и сортировки настроен gridwiev <br>
5 внешний вид сделан с помощью bootstrap, кастомные стили не понадобились <br>
6 большая часть операций реализована через ajax (yii2 Pjax) <br>
7 код не комментируется, кроме самодокументирования именами классов, переменных, методов <br>

Соображения по доработке
------------

1 настроить htacess <br>
2 вынести фильтрацию на отдельную страницу <br>
3 сделать редактирование оффера при клике на всё поле <br>
3 исправить виджет на мобилке <br>



Внешний вид
------------
![image](https://github.com/user-attachments/assets/551d08c8-d791-4bca-a004-9270ee985c5b)
<br>
![image](https://github.com/user-attachments/assets/3882d79a-2345-42a1-a994-a8b846876784)
<br>
![image](https://github.com/user-attachments/assets/27a9350f-b2a2-402c-9242-537479a9d5db)

