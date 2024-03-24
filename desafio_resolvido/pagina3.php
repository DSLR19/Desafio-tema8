<?php
session_start();

if(isset($_SESSION['altura']) && isset($_SESSION['altura2'])) {
    if ($_SESSION['altura'] > $_SESSION['altura2']) {
        $maiorAltura = $_SESSION['nome'];
    } elseif ($_SESSION['altura'] < $_SESSION['altura2']) {
        $maiorAltura = $_SESSION['nome2'];
    } else {
        $maiorAltura = 'Ambos têm a mesma altura';
    }
}

if(isset($_SESSION['idade']) && isset($_SESSION['idade2'])) {
    if ($_SESSION['idade'] > $_SESSION['idade2']) {
        $maisVelho = $_SESSION['nome'];
    } elseif ($_SESSION['idade'] < $_SESSION['idade2']) {
        $maisVelho = $_SESSION['nome2'];
    } else {
        $maisVelho = 'Ambos têm a mesma idade';
    }
}

if(isset($_SESSION['peso']) && isset($_SESSION['peso2'])) {
    if ($_SESSION['peso'] > $_SESSION['peso2']) {
        $maiorPeso = $_SESSION['nome'];
    } elseif ($_SESSION['peso'] < $_SESSION['peso2']) {
        $maiorPeso = $_SESSION['nome2'];
    } else {
        $maiorPeso = 'Ambos têm o mesmo peso';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h2>Comparação de Informações</h2>
    <p>Quem tem uma altura maior: <?php echo $maiorAltura; ?></p>
    <p>Quem é mais velho: <?php echo $maisVelho; ?></p>
    <p>Quem tem o peso maior: <?php echo $maiorPeso; ?></p>
</body>
</html>
