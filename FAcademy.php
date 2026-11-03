<?php
require_once "Monoplaza.php";
require_once "F4.php";

class FAcademy extends Monoplaza{
    private $potenciaMax;

    public function __construct($nombrePiloto, $nacPiloto, $numero, $escuderia, $potenciaMax, $cantPuntos = 0){
        parent::__construct($nombrePiloto, $nacPiloto, $numero, $escuderia, $cantPuntos);
        $this->potenciaMax = $potenciaMax;
    }

    #[Override]
    public function posicionValida(int $pos)
    {
        return $pos >= 1 && $pos <= 18;
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
                $this->setCantPuntos($pActuales + 18);
                break;
            case 2:
                $this->setCantPuntos($pActuales + 15);
                break;
            case 3:
                $this->setCantPuntos($pActuales + 12);
                break;
            case 4:
                $this->setCantPuntos($pActuales + 10);
                break;
            case 5:
                $this->setCantPuntos($pActuales + 8);
                break;
            case 6:
                $this->setCantPuntos($pActuales + 6);
                break;
            case 7:
                $this->setCantPuntos($pActuales + 4);
                break;
            case 8:
                $this->setCantPuntos($pActuales + 2);
                break;
            case 9:
                $this->setCantPuntos($pActuales + 1);
                break;
            default:
                break;
        }
    }

    public function subirCategoria($pais){
        return new F4($this->getNombrePiloto(), $this->getNacPiloto(), $this->getNumero(), $this->getEscuderia(), $pais, $this->getCantPuntos());
    }
}
?>