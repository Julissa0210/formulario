<?php

$db = mysqli_connect('localhost', 'root', '', 'reg_alumn');

if(!$db){
    echo "Error al establecer conexcion con la base de datos";
    echo "Error: ".mysqli_connect_errno();
    exit;
}