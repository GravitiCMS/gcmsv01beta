<?php
    if (!defined('gravitycms'))  exit ("Упс!");
    
        /*Коннект с базой данных*/
    $host = 'localhost'; // адрес сервера 
    $database = 'ввел'; // имя базы данных
    $user = 'ввел'; // имя пользователя
    $password = 'ввел'; // пароль

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
          or die("Ошибка подключения к базе данных! " . mysqli_error($link));

          
    /*Настрйока пунктов меню в шапке*/
    $menu = array(
        array('title' => 'главная', 'url' => '/'),
        array('title' => 'форум', 'url' => '/'),
        array('title' => 'сайт разработчика', 'url' => '/')
        );
    
    
    /*Настройка Заголовка*/
    $title = "Проект игровых серверов";
    
    /*Настройка подключения к БД бан систем*/
    /* Пример для нескольких бан систем
        $bansystem = array(
        array('id' => '0', 'host' => 'localhost', 'user' => 'mysql', 'password' => 'mysql', 'database' => 'amx_bans'),
        array('id' => '1', 'host' => 'localhost', 'user' => 'mysql', 'password' => 'mysql', 'database' => 'amx_bans'),
        array('id' => '2', 'host' => 'localhost', 'user' => 'mysql', 'password' => 'mysql', 'database' => 'amx_bans'),
        );
     
     */
    /*$bansystem = array(
        array('id' => '0', 'host' => 'localhost', 'user' => 'id5441548_123', 'password' => '123qwe123', 'database' => 'id5441548_123')
        ); 

    */
    
    /*Настройка запрещенных имен при регистрации*/
    $black_list_names = array('cs16', 'cs 1.6', 'boost.ua');
    
    /*Включить регистрацию ника?*/
    $allow_nick_reg = TRUE; // TRUE - да, FALSE - нет
    
    /*Сколько раз за все время администрирования можно сменить имя*/
    $numbers_of_names = 5;
    
    /*Какой флаг выдавать при регистрации ника*/
    $access_f = "z";
    
    /*Показывать зарегистрированных в списке админов?*/
    $ashow = "1"; // 1 - да, 0 - нет