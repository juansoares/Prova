<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  if(isset($_GET["mensagem"])& !empty($_GET["mensagem"])){
    if($_GET["mensagem"]=="sucesso"){
      echo "Dados gravados com sucesso!!!";
    }elseif ($_GET["mensagem"]=="erro") {
      echo "Erro ao gravar os dados!!!";
    }
  }
   ?>
    <form action="../controler/Controle.php" method="post">
      <label> Razão Social </label>
      <input type="text" name="razaoSocial" value="">
      <label> Data de Emissão </label>
      <input type="date" name="dataDeEmissao" value="">
      <label> CNPJ </label>
      <input type="text" name="cnpj" value="">
      <label> Valor Total</label>
      <input type="text" name="valorTotal" value="">
      <input type="submit" name="" value="Enviar">

    </form>
  </body>
</html>
