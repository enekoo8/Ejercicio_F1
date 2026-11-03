<?php
require_once "Monoplaza.php";
require_once "F3.php";

class F4 extends Monoplaza{
    private $pais;

    public function __construct($nombrePiloto, $nacPiloto, $numero, $escuderia, $pais, $cantPuntos = 0){
        parent::__construct($nombrePiloto, $nacPiloto, $numero, $escuderia, $cantPuntos);
        $this->pais = $pais;
    }
    
    #[Override]
    public function posicionValida(int $pos)
    {
        return $pos >= 1 && $pos <= 30;
    }

    #[Override]
    public function otorgarPuntos(int $pos, bool $vueltaRapida)
    {
        if (!$this->posicionValida($pos)){
            echo "Posicion fuera de rango --> ";
            return;
        }

        $pActuales = $this->getCantPuntos();
        switch ($pos) {
            case 1:
                $this->setCantPuntos($pActuales + 25);
                break;
            case 2:
                $this->setCantPuntos($pActuales + 18);
                break;
            case 3:
                $this->setCantPuntos($pActuales + 15);
                break;
            case 4:
                $this->setCantPuntos($pActuales + 12);
                break;
            case 5:
                $this->setCantPuntos($pActuales + 10);
                break;
            case 6:
                $this->setCantPuntos($pActuales + 8);
                break;
            case 7:
                $this->setCantPuntos($pActuales + 6);
                break;
            case 8:
                $this->setCantPuntos($pActuales + 4);
                break;
            case 9:
                $this->setCantPuntos($pActuales + 2);
                break;
            case 10:
                $this->setCantPuntos($pActuales + 1);
                break;
            default:
                break;
        }
    }

    public function subirCategoria($nombreAcademia){
        return new F3($this->getNombrePiloto(), $this->getNacPiloto(), $this->getNumero(), $this->getEscuderia(), $nombreAcademia, $this->getCantPuntos());
    }
}
?>