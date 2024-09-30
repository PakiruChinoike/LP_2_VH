<?php

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $parcela = $_POST['parcela'];

    $juros = $preco * $parcela * 0.10;
    $vlr_parcela = ($preco + $juros) / $parcela;
    $total = $preco + $juros;

    echo "<p>$nome deverá pagar: </p>";
    echo "<p>R$ $juros em juros e R$ $vlr_parcela em cada parcela.</p>";
    echo "<p>Para um total de R$ $total.</p>"

?>