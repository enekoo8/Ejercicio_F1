<?php
require_once "F1.php";
require_once "F2.php";
require_once "F3.php";
require_once "F4.php";
require_once "FAcademy.php";

$piloto1 = new F1("Carlos Sainz", "Española", 55, "Williams", "Santander");
$piloto1->otorgarPuntos(1, true);
echo "Puntos F1: " . $piloto1->getCantPuntos() . "<br>";

$piloto2 = new F2("Piloto F2", "Española", 7, "Equipo F2", true);
$piloto2->otorgarPuntos(11, false);
echo "Puntos F2: " . $piloto2->getCantPuntos() . "<br>";

$piloto3 = new F3("Piloto F3", "Española", 10, "Equipo F3", "Academia Ferrari");
$piloto3->otorgarPuntos(2, true);
echo "Puntos F3: " . $piloto3->getCantPuntos() . "<br>";

$piloto4 = new F4("Piloto F4", "Española", 20, "Equipo F4", "España");
$piloto4->otorgarPuntos(1, true);
echo "Puntos F4: " . $piloto4->getCantPuntos() . "<br>";

$piloto5 = new FAcademy("Pilota Academy", "Española", 21, "F Academy", 160);
$piloto5->otorgarPuntos(20, true);
echo "Puntos F Academy: " . $piloto5->getCantPuntos() . "<br>";

$nuevoPiloto = $piloto3->subirCategoria(true);
echo "El piloto de F3 ha pasado a F2 <br>";

$piloto1->subirCategoria();
?>