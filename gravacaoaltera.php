<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 //  session_start();
//   include "mostra_erros.php";
   //echo $_SESSION['Sistema'];
   //echo session_id();
//   if($_SESSION['Sistema'] <> session_id())
 //  {
 //       echo "<script>alert('Sistema nao pode ser consultado. Voce deve acessar a pagina inicial');window.location='index3.php'</script>";
  // }
//session_start();
//  if($_SESSION['logado_sysifadm'] != "true")  //
//  {
//      echo "<script>window.location.href='loginadm.php';</script>"; 
//  }

$txtConteudo = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($txtConteudo["nome"]))
{ 
   $id = $txtConteudo['id'];	
   $nome = $txtConteudo['nome'];
   $cpf = $txtConteudo['cpf'];
   $endereco = $txtConteudo['endereco'];
   $numero = $txtConteudo['numero'];
   $bairro = $txtConteudo['bairro'];
   $cep = $txtConteudo['cep'];
   $cidade = $txtConteudo['cidade'];
   $uf = $txtConteudo['uf'];
//   var_dump($txtConteudo);
//   die();
   
 //    if ($var_concordaemcompartilharconhecimento == 'on')
//    {
//        $var_concordaemcompartilharconhecimento = '1';
//    }
//    else
//    {
//        $var_concordaemcompartilharconhecimento = '0';
//    }
}
else
{
   echo 'Nao foi inserido'; 
   echo '<meta http-equiv="refresh" content="2;URL=consulta.php" />';
   return;
    
}


include "inc_dbConexao.php";

    $sql = "Update cadastroaluno set ";
 
    $sql = $sql ." nome = '$nome',";
    $sql = $sql ." cpf = '$cpf',";
    $sql = $sql ." endereco = '$endereco', ";
    $sql = $sql ." numero = '$numero',";
    $sql = $sql ." bairro = '$bairro',";
    $sql = $sql ." cep = '$cep', ";
    $sql = $sql ." cidade = '$cidade',";
    $sql = $sql ." uf = '$uf'";
    $sql = $sql ." Where id = '".$id."' ";	
 



   
//echo $sql;	
//die();

$rs=mysqli_query($conexao,$sql);
if(!$rs)
{
   echo $sql;
   echo 'Problemas na alteração, avise o suporte'; 
   echo '<meta http-equiv="refresh" content="10;URL=consulta.php" />';
   return;
    
}    

//echo $sql;
mysqli_close($conexao);
echo '<meta http-equiv="refresh" content="1;URL=consulta.php" />';

?>