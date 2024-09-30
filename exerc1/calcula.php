<?php
    $nome = $_POST['name'];
    $almoco = $_POST['almoco'];
    $refri_qnt = $_POST['refri_qnt'];
    $refri_vlr = $_POST['refri_vlr'];

    $resultado = ($refri_qnt * $refri_vlr) + $almoco;

    echo "<p> $nome, o valor do seu almoço é: $resultado</p>";
?>