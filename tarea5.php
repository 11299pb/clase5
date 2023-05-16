<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

abstract class Medicamento{
    protected $Jarabe;
    public $tipo;
    public static $empresa = "farmacia cruz verde";

    public function __construct($Jarabe, $tipo){
        $this->Jarabe = $Jarabe;
        $this->tipo = $tipo;

    }

    final public static function getEmpresa(){
         self::$empresa;
    }

    private function getInfo(): void{
        echo "la farmacia cuenta con  $this->Jarabe en jarabe y cuenta con $this->tipo cantidades";

    }
    
    public function getJarabe(): void{
        echo "la farmacia ofrece $this->Jarabe jarabe";
    }

    public function getTipo(): void{
        echo "la farmacia ofrece en $this->tipo cantidades";

    }
}

    class peptobismol extends Medicamento{

        public $cantidad;
        public function __construct($cantidad = 0, $Jarabe = "sin existencia", $tipo = "ninguno")
        { 
        $this->cantidad = $cantidad;
        parent::__construct($Jarabe, $tipo);
        }

        public function getInfo() : void{
            echo "El Medicamento  $this->Jarabe es Jarabe y es de tipo: $this->tipo  , En existencia contamos con $this->cantidad. ";
        }

    }

    class bronchotos extends Medicamento{

        public $cantidad;
        public function __construct($cantidad = 0, $Jarabe = "sin existencia", $tipo = "ninguno")
        { 
        $this->cantidad = $cantidad;
        parent::__construct($Jarabe, $tipo);
        }
        public function getInfo() : void{
            echo "El Medicamento  $this->Jarabe es Jarabe y es de tipo: $this->tipo , En existencia contamos con  $this->cantidad.";
        }
    
}

$peptobismol = new peptobismol (10, "PEPTOBISMOL", "A");
$peptobismol->getInfo();
echo "<br>";
echo "<br>";
$bronchotos = new bronchotos (15, "BRONCHOTOS", "B");
$bronchotos->getInfo();