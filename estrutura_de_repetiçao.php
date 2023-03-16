<?php //circulo for
//mostra a tabuada de 7
$num = 7;
//estrutura de repetição 
//que executa a 1 à 10.
for ($i=1; $i <= 10; $i++) {
    //calcula e mostra o resultaado da 
    //multiplicação de 7 com os 
    //números de 1 à 10 
    $r = $i * $num;
    echo "$i x $num = $r <br/>";
}
/>

<?php //laço while
//mostra os números ímpares 
$num = 1;
//estrutura de repetição 
//que executa enquanto a 
//variável for menor que 50
while ($num <= 50) {
    //soma +2 na variável $num
    $num = $num + 2;
    echo "$num <br/>";
}
?>
