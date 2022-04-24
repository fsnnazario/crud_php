<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
   /*
   session_start();
   include "mostra_erros.php";
   //echo $_SESSION['Sistema'];
   //echo session_id();
   if($_SESSION['Sistema'] <> session_id())
   {
        echo "<script>alert('Sistema nao pode ser consultado. Voce deve acessar a pagina inicial');window.location='index3.php'</script>";
   }
    */
//    session_start();
//    if($_SESSION['logado_sysif'] != "true")
//    {
//	echo "<script>window.location.href='login.php';</script>";
//    }
$txtConteudo = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if(isset($txtConteudo["id"]))        
{       
    $var_id = $txtConteudo["id"];


    include "inc_dbConexao.php";

    $sql = "Delete From cadastroaluno ";
    $sql = $sql ." where id = '".$var_id."' ";

            //echo $sql;
    $rs=mysqli_query($conexao,$sql);
    if($rs)
    {
        print "Dados excluidos com sucesso";
    }
    else
    {
        print "Exclusao não foi executada";
    }
    mysqli_close($conexao);
    print "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=consulta.php'>";
}    
else
{
     print "Exclusao não foi executada, problemas com o navegador, verifique";
}
?>