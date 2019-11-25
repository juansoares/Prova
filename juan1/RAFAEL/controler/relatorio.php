
<?php
  include("../model/Pessoa.php");
  $listarPessoa = new Pessoa();
  $retornoDados = $listarPessoa->listar();


  echo "Foram encontrados " . count($retornoDados) . " registros.";//verifica quantos registros tem no vetor
  if (count($retornoDados) > 0){
    ?>
    <table border=1>
      <tr>

        <td>id</td>
        <td>dataDeEmissao</td>
        <td>razaoSocial</td>
        <td>cnpj</td>
        <td>valorTotal</td>
      </tr>
      <?php
      foreach ($retornoDados as $key => $value) {

        echo "<tr><td>" . $value["id"];
        echo "</td><td>" . $value["dataDeEmissao"];
        echo "</td><td>" . $value["razaoSocial"];
        echo "</td><td>" . $value["cnpj"];
        echo "</td><td>" . $value["valorTotal"];
        echo "</td></tr>";
      }
      ?>
    </table>
    <?php
  }
?>
