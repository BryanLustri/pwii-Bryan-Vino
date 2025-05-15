<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $km = floatval($_POST["km"]);
    $litros = floatval($_POST["litros"]);

    if ($km < $litros) {
    
        $consumo = $km / $litros;
        echo "<h2>Resultado:</h2>";
        echo "<p>Distância: {$km} km</p>";
        echo "<p>Combustível: {$litros} litros</p>";
        echo "<p><strong>Consumo médio:</strong> " . number_format($consumo, 2) . " km/l</p>";
    }
} else {
    echo "Acesse este script pelo formulário HTML.";
}
?>
