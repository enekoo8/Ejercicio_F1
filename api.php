<?php
$url = "https://api.openf1.org/v1/drivers?session_key=latest";
$respuesta = file_get_contents($url);

if ($respuesta === false){
    echo "No se ha podido conectar con la API";
} else {
    $pilotos = json_decode($respuesta, true);

    foreach ($pilotos as $piloto){
        if ($piloto["driver_number"] == 16 || $piloto["driver_number"] == 44){
            echo "Nombre: " . $piloto["full_name"] . "<br>";
            echo "Numero: " . $piloto["driver_number"] . "<br>";
            echo "Escuderia: " . $piloto["team_name"] . "<hr>";
        }
    }
}
?>