<?PHP
/*
   session_start();
   if($_SESSION['logado_sysif'] != "true")
   {
        echo "<script>window.location.href='login.php';</script>";
   }

   $Login = $_SESSION['LOGIN'];
   $situacao = "";
 
 */
/*
   if ($Instituto == "Todos")
   {
      $habilitainstituicao = true;
      $situacao = "enabled";

   }
   else
   {
       $habilitainstituicao = false;
       $situacao = "disabled";

   }
*/

   include "mostra_erros.php";
   //echo $_SESSION['Sistema'];
   //echo session_id()//;
 //  if($_SESSION['Sistema'] <> session_id())
 //  {
 //       echo "<script>alert('Sistema nao pode ser consultado. Voce deve acessar a pagina inicial');window.location='index3.php'</script>";
 //  }
        include "inc_dbConexao.php";
//        $conexao = mysql_connect("localhost","root","");
//        $bancodedados = "Info11";
 //       $db = mysql_select_db($bancodedados, $conexao);
$txtConteudo = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if(isset($txtConteudo["id"]))        
{       
        $codigo = $txtConteudo["id"];
        // Recupera dados do Registro
        $sql = "Select * from cadastroaluno ";
        $sql = $sql . " where id = '".$codigo."'";
        $rs = mysqli_query($conexao,$sql);
        $reg = mysqli_fetch_array($rs);
        
        $id = $reg["id"];
        $nome = $reg["nome"];
        $cpf = $reg["cpf"];
        $endereco = $reg["endereco"];
        $cidade = $reg["cidade"];
        $uf = $reg["uf"];
        $cep = $reg["cep"];
        $bairro = $reg["bairro"];

        
        
}
 else
{
   echo 'Nao foi localizado o registro'; 
   echo '<meta http-equiv="refresh" content="2;URL=altera.php" />';
   return;
}
        
       ?>

<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> -->
<!DOCTYPE HTML>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>
            Formulário para Validação em Javascript
        </title>
         <link href="estilo2.css" rel="stylesheet" type="text/css"> 
        <!-- Valida Formulario -->
        <script language="javascript">
            function validaform()
            {
                if(document.form1.codigo.value=="")
                    {
                        alert("Por Favor, preencha o campo [C�digo].");
                        form1.codigo.focus();
                        return false;
                    }
         
                if(document.form1.descricao.value=="")
                    {
                        alert("Por Favor, preencha o campo [Descricao].");
                        form1.descricao.focus();
                        return false;
                    }
                    
                if(document.form1.unidade.value=="")
                    {
                        alert("Por Favor, preencha o campo [Unidade].");
                        form1.unidade.focus();
                        return false;
                    }
                if(document.form1.valorcompra.value == "")
                   {
                        alert("Por Favor, preencha o campo [Valor Compra].");
                        form1.valorcompra.focus();
                        return false;
                   }
                if(document.form1.valorvenda.value == "")
                    {
                        alert("Por Favor, preencha o campo [Valor Venda].");
                        form1.valorvenda.focus();
                        return false;
                    }
                if(document.form1.estoqueminimo.value == "")
                    {
                        alert("Por Favor, preencha o campo [Estoque Minimo].");
                        form1.estoqueminimo.focus();
                        return false;
                    }
                if(document.form1.estoqueatual.value == "")
                    {
                        alert("Por Favor, preencha o campo [Estoque Atual].");
                        form1.estoqueatual.focus();
                        return false;
                    }

            return true;
        }
        function numero_inteiro(e)
        {
            var tecla=(window.event)?event.keyCode:e.which;
            if((tecla>47 && tecla<58))
                return true;
            else
                if(tecla != 8) return false;
                else return true;
        }
        function numero_fracionario(e)
        {
            var tecla=(window.event)?event.keyCode:e.which;
            if((tecla>47 && tecla<58 || tecla==46 || tecla==44))
                return true;
            else
                if(tecla != 8) return false;
                else return true;

        }
        </script>
            
        
        
    </head>
    <body>
        <!--//<p> Senten�a SQL desse Laborat�rio: <strong> <?PHP print $sql; ?> </strong><br />-->
        
        <form name="form1" method="post" onsubmit="return validaform();" action="gravacaoaltera.php">

                <H1> Alteração cadastro de Alunos
                </H1>
                <input type="hidden" name="id" VALUE="<?PHP print $id; ?>"/>
                 <p>
                    <label>Nome:</label>
                    <input name="nome" type="text" class="caixa_texto" size="50" maxlength="50" value="<?PHP print $nome; ?>"/>
                </p>
                <p> <label>CPF:</label>
                    <input name="cpf" type="text" class="caixa_texto" size="14" maxlength="14" value="<?PHP print $cpf; ?>"/> <!--onkeypress="return numero_fracionario(event)"-->
                </p>
                <p>
                    <label>Endereço:</label>
                    <input name="endereco" type="text" class="caixa_texto" size="50" maxlength="50" value="<?PHP print $endereco; ?>"/>
                </p>
                <p>
                    <label>Numero:</label>
                    <input name="numero" type="text" class="caixa_texto" size="50" maxlength="50" value="<?PHP print $numero; ?>"/>
                </p>
                <p>
                    <label>Bairro:</label>
                    <input name="bairro" type="text" class="caixa_texto" size="50" maxlength="50" value="<?PHP print $bairro; ?>"/>
                </p>
                <p>
                    <label>Cidade:</label>
                    <input name="cidade" type="text" class="caixa_texto" size="50" maxlength="40" value="<?PHP print $cidade; ?>"/>
                </p>
                <p>
                    <label>UF:</label>
                    <input name="uf" type="text" class="caixa_texto" size="2" maxlength="2" value="<?PHP print $uf; ?>"/> <!--onkeypress="return numero_fracionario(event)"-->
                </p>
                <p>
                    <label>CEP:</label>
                    <input name="cep" type="text" class="caixa_texto" size="8" maxlength="8" value="<?PHP print $cep; ?>"/> <!--onkeypress="return numero_fracionario(event)"-->
                </p>
                
                <p>
                   <input type="image" name="imageField" src="img/btn_alterar.gif">
                   <br>
                   <a href="formulario.html">Home</a>

                </p>
        </form>
    </body>
</html>