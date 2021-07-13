<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO3</title>
</head>
<body>
    
</body>
</html>
<?php
// crear una clase
class DatosPersonales {
    // atributos..
    public $nombre;
    public $apellido;
    public $edad;
    protected $nacionalidad;
    public $telefono;

    //constructor
    public function __construct($nombre,$apellido,$edad,$nacionalidad,$telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
        $this->nacionalidad=$nacionalidad;
        $this->telefono=$telefono;
    }

    //metodos
    public function mostrarValores(){
        echo "El nombre es:".$this->nombre;
    }
    public function getOrigen(){
        return $this->nacionalidad;
    }
    public function setOrigen($nac){
        $this->nacionalidad=$nac;
        
    }

}

// Instanciar Objetos 
$cliente1 = new DatosPersonales('Estela','Perez','47','argentina','23456');
$cliente2 = new DatosPersonales('Rocio','Ponce','10','argentina','456789');


echo '<h2>Objeto Cliente 1</h2> <br>';
var_dump ($cliente1);
echo '<br> <h2>Objeto Cliente 2</h2> <br>';
var_dump ($cliente2);




class Usuario extends DatosPersonales{
    public $email;

    function __construct($nombre,$apellido,$edad,$nacionalidad,$telefono,$email){
    parent::__construct($nombre,$apellido,$edad,$nacionalidad,$telefono);
    $this-> email = $email;
    }
}
echo '<br> <h2>Clase Heredada</h2> <br>';

$usuario1=new Usuario('Gabriel','Ponce','49','argentino','9876544','kdjd@dsjd');
var_dump($usuario1);
