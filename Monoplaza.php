<?php
abstract class Monoplaza{
    private $nombrePiloto;
    private $nacPiloto;
    private $numero;
    private $escuderia;
    private $cantPuntos;

    public function __construct($nombrePiloto, $nacPiloto, $numero, $escuderia, $cantPuntos = 0){
        $this->nombrePiloto = $nombrePiloto;
        $this->nacPiloto = $nacPiloto;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->cantPuntos = $cantPuntos;
    }

    public function getNombrePiloto(){ 
        return $this->nombrePiloto; 
    }

    public function getNacPiloto(){ 
        return $this->nacPiloto; 
    }

    public function getNumero(){ 
        return $this->numero; 
    }

    public function getEscuderia(){ 
        return $this->escuderia; 
    }

    public function getCantPuntos() {
        return $this->cantPuntos;
    }

    public function setCantPuntos(int $puntos) {
        $this->cantPuntos = $puntos;
    }

    abstract public function posicionValida(int $pos);

    abstract public function otorgarPuntos(int $pos, bool $vueltaRapida);

}
?>