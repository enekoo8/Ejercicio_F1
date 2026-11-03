<?php
require_once "Monoplaza.php";
require_once "F1.php";

class F2 extends Monoplaza{
    private $puedeSubir;

    public function __construct($nombrePiloto, $nacPiloto, $numero, $escuderia, bool $puedeSubir, $cantPuntos = 0){
        parent::__construct($nombrePiloto, $nacPiloto, $numero, $escuderia, $cantPuntos);
        $this->puedeSubir = $puedeSubir;
    }

    #[Override]
    public function posicionValida(int $pos)
    {
        return $pos >= 1 && $pos <= 24;
    }

    #[Override]
    public function otorgarPuntos(int $pos, bool $vueltaRapida)
    {
        if (!$this->posicionValida($pos)){
            echo "Posicion fuera de rango --> ";
            return;
        }

        $pActuales = $this->getCantPuntos();
        if ($vueltaRapida){
            $this->setCantPuntos($pActuales + 1);
        }
        switch ($pos) {
            case 1:
                $this->setCantPuntos($pActuales + 10);
                break;
            case 2:
                $this->setCantPuntos($pActuales + 8);
                break;
            case 3:
                $this->setCantPuntos($pActuales + 7);
                break;
            case 4:
                $this->setCantPuntos($pActuales + 6);
                break;
            case 5:
                $this->setCantPuntos(5);
                break;
            case 6:
                $this->setCantPuntos($pActuales + 4);
                break;
            case 7:
                $this->setCantPuntos($pActuales + 3);
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

    public function subirCategoria($patrocinador){
        if ($this->puedeSubir){
            return new F1($this->getNombrePiloto(), $this->getNacPiloto(), $this->getNumero(), $this->getEscuderia(), $patrocinador, $this->getCantPuntos());
        }
        echo "El piloto no tiene los puntos suficientes de superlicencia";
        return null;
    }
}
?>