<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    
    echo "<!DOCTYPE html>";
    echo "<html lang='pt-BR'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Tabuada</title>";
    echo "<link rel='stylesheet' href='styles.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Gerador de Tabuada</h1>";
    echo "<form action='tabuada_processamento.php' method='post'>";
    echo "<label for='numero'>Digite um número:</label>";
    echo "<input type='number' id='numero' name='numero' value='$numero' required>";
    echo "<input type='submit' value='Gerar Tabuada'>";
    echo "</form>";
    echo "<h2>Tabuada do $numero</h2>";
    echo "<ul>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }

    echo "</ul>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
?>
