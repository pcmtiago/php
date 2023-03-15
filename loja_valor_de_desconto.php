<?php 
    //declara as variáveis 
    $valorUnitario = 10.50;
    $quantidade = 3;
    //calcula o valor da produto
    $valorTotal = $valorUnitario * $quantidade;
    //calcula o valor de desconto (10% do valor total)
    $valorDesconto = $valorTotal * 10 / 100;
    //declara a variável contendo o valor pago
    $valorPago = 100;
    //calcula o valor do troco. Note a importância do uso dos parênteses
    $valorTroco = $valorPago - ($valorTotal - $valorDesconto);
    //imprimi os resultados para o usuário
    echo "<br/>Valor Total: " . $valorTotal;
    echo "<br/>Valor de Desconto: " . $valorDesconto;
    echo "<br/> Valor do Troco: " . $valorTroco;
?>