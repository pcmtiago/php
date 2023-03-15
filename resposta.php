<?php
    //página de resposta
    //calcula o valor total
    $valorTotal = $_POST["valorUnitario"] * $_POST["quantidade"];
    //calcula o valor de desconto
    $valorDesconto = $valorTotal * 10 / 100;
    //calcula o valor de troco
    $valorTroco = $_POST["valorPago"] - ($valorTotal - $valorDesconto);
    echo "<br/>Valor Total: " . $valorTotal;
    echo "<br/>Valor de Desconto: " . $valorDesconto;
    echo "<br/>Valor do Troco: " . $valorTroco;
?>