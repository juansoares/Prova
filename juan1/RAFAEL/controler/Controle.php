<?php
  include("../model/Pessoa.php");
  $pessoa1 = new Pessoa();
  $dataDeEmissao =$_POST["dataDeEmissao"];
  $razaoSocial = $_POST["razaoSocial"];
  $cnpj = $_POST["cnpj"];
  $valorTotal = $_POST["valorTotal"];
  $inserir = $pessoa1->cadastrar($dataDeEmissao, $razaoSocial, $cnpj, $valorTotal);
  if ($inserir==1){

    header('location: ../view/formulario.php?mensagem=sucesso');
  }else{
    header('location: ../view/formulario.php?mensagem=erro');


  }
//  $pessoa1->listar();
?>
