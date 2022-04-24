<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//   session_start();
//   include "mostra_erros.php";
   //echo $_SESSION['Sistema'];
   //echo session_id();
//   if($_SESSION['Sistema'] <> session_id())
//   {
//        echo "<script>alert('Sistema nao pode ser consultado. Voce deve acessar a pagina inicial');window.location='index3.php'</script>";
//   }
    //include "estilo1.inc";

//    session_start();
//    if($_SESSION['logado_sysifadm'] != "true")
//    {
//	echo "<script>window.location.href='loginadm.php';</script>";
//    }

//    $Login = $_SESSION['LOGIN'];
    
    include "inc_dbConexao.php";

    // Armazena a Senten�a SQL na vari�vel $sql
    $sql = "Select * from cadastroaluno ";
    $rs = mysqli_query($conexao,$sql);
    $total_registros = mysqli_num_rows($rs);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estiloresponsivo.css">
        <link rel="stylesheet" href="css/index-grid.css">
        <title>Cadastro de Alunos</title>

        <script language="Javascript">
            function confirmacao(id,nome) {
            var resposta = confirm("Deseja remover "+nome+"?");
             if (resposta == true) {
                  window.location.href = "exclui1.php?id="+id;
            }
        }
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>
        <!-- Cria Tabela para a exibi�?o dos dados com 11 colunas e exibe na primeira linha seus titulos -->
        <h1> Relação de alunos </h1>
        <table cellspacing="0" border ="1">
            <thead>
                <tr>
                    
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereco</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?PHP
                // Inicia o la�o para exibi�?o dos registros
                // Cada Linha da Tabela sera armazenada na vari�vel $reg por interm�dio da fun�?o mysql_fecth_array()
                //
                while ($reg=mysqli_fetch_array($rs))
                {
                    $id = $reg["id"];
                    $nome = $reg["nome"];
                    $cpf = $reg["cpf"];
                    $endereco = $reg["endereco"];
                    $cidade = $reg["cidade"];


            ?>
            <!-- Monta a proxima Linha da tabela exibindo os dados nas respectivas colunas -->
            <tr>
            
            <td><?PHP print $nome; ?></td>
            <td><?PHP print $cpf; ?></td>
            <td><?PHP print $endereco; ?></td>
            <td><?PHP print $cidade; ?></td>
            
            <td>
                <div align="right">
                <a href="altera.php?id=<?PHP print $id; ?>"><img src="img/btn_alterar2.gif" alt="Alterar Registro" border="0"></a> 
                <a href="javascript:func()" onclick="confirmacao('<?PHP print $id; ?>','<?PHP print $nome; ?>')"><img src="img/btn_excluir2.gif"  alt="Excluir Registro" border="0"></a> 

<!--                <a href="exclui1.pqrrhp?id=<?PHP print $id; ?>"><img src="img/btn_excluir2.gif" alt="Excluir Registro" border="0"></a> -->
                </div>
            </td>
            </tr>
            <?PHP
                }
             ?>
        </table>
        <a href="formulario.html">Home</a>


    </body>
</html>
<?PHP
             mysqli_free_result($rs);
             mysqli_close($conexao);
?>