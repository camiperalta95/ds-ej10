<?php

class DatosPersona{
    public $nombre;
    public $apellido;
    public $email;

    public function MostrarDatos (){
        echo 'Nombre : '. $this ->nombre. '<br>';
        echo 'Apellido : '.$this ->apellido. '<br>';
        echo 'Email : '. $this ->email. '<br>';
    }
    
}