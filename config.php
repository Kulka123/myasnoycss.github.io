<?php
$dbhost = "localhost"; // Хост
$dbuser = "p295196_bans"; // Имя пользователя
$dbpassword = "QXmjAio"; // Пароль
$dbname = "p295196_bans"; // Имя базы данных
 
// Подключаемся к mysql серверу
$link = mysql_connect($dbhost, $dbuser, $dbpassword);
// Выбираем нашу базу данных
mysql_select_db($dbname, $link);


# Часовой пояс
date_default_timezone_set('Europe/Moscow');

# Константы
define("SITENAME", "Кайфовый паблик [18+]");
define("DEFKEY", "Игровой сервер CS 1.6 Кайфовый паблик [18+]");
define("DEFDESC", "Игровой сервер CS 1.6 Кайфовый паблик [18+]");

# Переменные
$sitename = 'Кайфовый паблик [18+]';
$defkey = 'Игровой сервер CS 1.6 Кайфовый паблик [18+]';
$defdesc = 'Игровой сервер CS 1.6 Кайфовый паблик [18+]';
$version = 'botanicHTML v 1.1';
$author = 'botanic.inc';

?>