<?php
class Car{
    private $num_telaio;
    public function __construct($_num_telaio){
        $this->num_telaio = $_num_telaio;
        // $this->getNumTelaio();
    }
    protected function getNumTelaio(){
        return $this->num_telaio;
    }
}
class Fiat extends Car{
    protected $license;
    protected $name;
    public function __construct($_num_telaio, $_license, $_name){
        parent::__construct($_num_telaio);
        $this->license = $_license;
        $this->name = $_name;
    }
    public function printCar(){
        echo "La mia macchina e' " . $this->name . " con targa " . $this->license . " e numero di telaio " . $this->getNumTelaio() . ". \n";
    }

}
$car = new Fiat("1234", "ND 123 CD", "Opel");
$car->printCar();
