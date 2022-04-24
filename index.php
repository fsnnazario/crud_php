<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Meu Primeiro PHP. Tads 2020
        </title>
    </head>
    <body>
        <?php
        echo "<h1> Meu Primeiro PHP <h1>";
        $variavel1 = 5;
        $variavel2 = 10;
        $soma = $variavel1+$variavel2;
        $subtracao = $variavel1-$variavel2;
        echo "<h2> Conteudo Variavel 1=".$variavel1." </h2>";
        echo "<h3> Conteudo Variavel 2=".$variavel2." </h3>";
        echo "<h4> Conteudo Soma=".$soma." </h4>";
        echo "<h5> Conteudo Substracao=".$subtracao." </h5>";
        if($variavel1>$variavel2)
        {
            echo "<h1> Variavel 1:".$variavel1." é maior que a Variavel 2:".$variavel2." </h1>";
        }
        else
        {
            echo "<h1> Variavel 2:".$variavel2." é maior que a Variavel 1:".$variavel1." </h1>";
        }    
        // put your code here
        $cont = 0;
        while($cont < $variavel2)
        {
            echo "<br>Valor de Cont = ".$cont." ".$variavel1." ";
            $cont++;
        }
        $cont = 0;
        do
        {
            echo "<br>Valor de Cont no do...while = ".$cont;
            $cont++;
            
        }while($cont<10);
        echo '<p>';
        for($cont=0;$cont<10;$cont++)
        {
            echo '<br><font color="#f00">Valor de Cont no for = '.$cont.'</font>';
            
        }
        echo '</p>';      
        ?>
    </body>
</html>