
<?php
class Pessoa{
  private  $dataDeEmissao, $razaoSocial, $cnpj, $valorTotal;

  public function setRazaoSocial ($razaoSocial){
    $this->razaoSocial=$razaoSocial;
  }
  public function getRazaoSocial(){
    return $this->razaoSocial;
  }

  public function getProtocolo(){
    return $this->protocolo;
  }
  public function setDataDeEmisao($dataDeEmissao){
    $this->dataDeEmissao = $dataDeEmissao;
  }
  public function getDataDeEmissao(){
    return $this->dataDeEmissao;
  }
  public function setCnpj($cnpj){
    $this->cnpj = $cnpj;
  }
  public function getCnpj(){
    return $this->cnpj;
  }
  public function setValorTotal($valorTotal){
    $this->valorTotal = $valorTotal;
  }
  public function getValorTotal(){
    return $this->valorTotal;
  }
  public function cadastrar($dataDeEmissao, $razaoSocial, $cnpj, $valorTotal){
    $this->setDataDeEmisao($dataDeEmissao);
    $this->setRazaoSocial($razaoSocial);
    $this->setCnpj($cnpj);
    $this->setValorTotal($valorTotal);
    //query de consulta para inclusão
    echo $sqlInsert = "insert into lancamento
    (dataDeEmissao, razaoSocial, cnpj, valorTotal)
    values
    ('{$this->getDataDeEmissao()}','{$this->getRazaoSocial()}','{$this->getCnpj()}',
    '{$this->getValorTotal()}')";
    //executar a query

    include("conexao.php");
    $conectar = new conexao();
    if($retornoInsert = $conectar->getConectar()->query($sqlInsert)){
      return 1;//retorna 1 caso seja gravado
    }else {
      return 0;//retorna 0 caso não seja gravado
    }
  }
  public function listar(){
    $lista = "select * from lancamento";
    include ("conexao.php");
    $objetoListar = new conexao();
    $retornoBanco = $objetoListar->getConectar()->query($lista);
    $dados = array();
    while($temp = $retornoBanco->fetch_array()) {
      $dados[]=$temp;
    }
    return $dados;

  }
}

?>
