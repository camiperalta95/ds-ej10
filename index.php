<?php

require_once 'modelo/DatosPersona.php';

//instaciar los datos

$DatosPersona1= new DatosPersona ();

//seteo los valores

$DatosPersona1->nombre = 'Guadalupe';
$DatosPersona1->apellido = 'Gonzalez';
$DatosPersona1->email = 'guadalupegonzales@gmail.com';

//ejecuto, muestro los datos

$DatosPersona1->MostrarDatos();
