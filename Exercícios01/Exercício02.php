<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comprimento = floatval($_POST["comprimento"]);
    $largura = floatval($_POST["largura"]);
    $altura = floatval($_POST["altura"]);

    $volume = $comprimento * $largura * $altura;

    echo "<h2>Resultado:</h2>";
    echo "<p>Comprimento: {$comprimento} cm</p>";
    echo "<p>Largura: {$largura} cm</p>";
    echo "<p>Altura: {$altura} cm</p>";
    echo "<p><strong>Volume:</strong> {$volume} cm³</p>";
} else {
    echo "Acesse este script pelo formulário HTML.";
}
?>
