<?php

function config()
{
    return include __DIR__ . './config.php';
}

function DBConnect(){
    //в переменной config появится то, что вернул файл
    $config = include '../config.php';
    mysql_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password']
    );
    mysql_select_db($config['db']['dbname']);
}

function DBQuery()
{
    /*
    соединиться с базой данных, спраятать это внутрь функции
    */
    DBConnect();

    /*
    выполнен запрос к базе данных, в ответ вернуклся результат,
    результат не является ни целым числом, ни строкой, ни массивом -
    это ресурс, который надо еще обработать
    */
    $res = mysql_query($sql);
    if(!$res){
        return [];
    }
    $ret=[];
    /*
    вызываем функцию mysql_fetch_assoc, которая каждый раз при своем вызове
    возвращает новую запись из результатов
    до тех пор, когда они не кончатся;
    когда они кончатся, вернет false
    */

    /*
     в переменную присваиваем следующую запись результата запроса
     */
    while ($row = mysql_fetch_assoc($res)) //
    {
        $ret[] = $row;
    }
    return $ret;
}