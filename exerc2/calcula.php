<?php

    $nome = $_POST['nome'];
    $qnt_dolar = $_POST['qnt_dolar'];
    $vlr_dolar = 5.60;

    $resultado = $qnt_dolar*$vlr_dolar;

    echo "<p> $nome deverá pagar R$ $resultado </p>";
?>