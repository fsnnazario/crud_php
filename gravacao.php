<?php
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $endereco = $_POST['endereco'];
   $numero = $_POST['numero'];
   $bairro = $_POST['bairro'];
   $cep = $_POST['cep'];
   $cidade = $_POST['cidade'];
   $uf = $_POST['uf'];
 
   include "inc_dbConexao.php";
   
    $sql = "INSERT INTO cadastroaluno ";
    $sql = $sql ."(";
    $sql = $sql ." nome,";
    $sql = $sql ." cpf,";
    $sql = $sql ." endereco, ";
    $sql = $sql ." numero,";
    $sql = $sql ." bairro,";
    $sql = $sql ." cep, ";
    $sql = $sql ." cidade,";
    $sql = $sql ." uf";
	
	$sql = $sql ." )";
    $sql = $sql ." VALUES ";
    $sql = $sql ." ( ";
    $sql = $sql ." '".$nome."',";
    $sql = $sql ." '".$cpf."',";
    $sql = $sql ." '".$endereco."',";
    $sql = $sql ." '".$numero."',";
    $sql = $sql ." '".$bairro."',";
    $sql = $sql ." '".$cep."',";
    $sql = $sql ." '".$cidade."',";
    $sql = $sql ." '".$uf."'";
    $sql = $sql ." )";
	$rs = mysqli_query($conexao,$sql);
    if(!$rs)
    {
         echo $sql;
         echo 'Problemas na gravacao, avise o suporte'; 
         echo '<meta http-equiv="refresh" content="10;URL=formulario.html" />';
         return;
    }
    mysqli_close($conexao);
	echo "<br>Gravação Executada com sucesso";
?>