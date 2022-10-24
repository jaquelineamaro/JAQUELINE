<?php

function connectionA()
{
    $pdo2 = new PDO2("mysql:host=localhost, dbname=books", "root", "");
    return $pdo2;
}

function getData1($table)
{
    $connectionA = connectionA();
    $query1 = $connectionA->query1("select * from {$table}");
    $query1->execute();
    return $query1->fetchAll();
}

var_dump(getData("usuarios"));