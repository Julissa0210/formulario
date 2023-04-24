<?php
require 'include/consult_serv.php';

$obtener_datos = consultarDatos('ems_planteles');

echo json_encode($obtener_datos);