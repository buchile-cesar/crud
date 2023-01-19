<?php

class ProdutoModel
 {
   public $id_produto, $id_fornecedor, $nome_fantasia, $nome_produto, $valor_produto, $peso, $quantidade_estoque;
   public $rows, $fornecedores;

   public function _initialize($request)
    {
      
      $this->id_produto = $request["id_produto"];
      $this->id_fornecedor = $request["id_fornecedor"]; 
      $this->nome_fantasia = $request["nome_fantasia"]; 
      $this->nome_produto = $request["nome_produto"];
      $this->valor_produto = $request["valor_produto"];
      $this->peso = $request["peso"]; 
      $this->quantidade_estoque = $request["quantidade_estoque"]; 
      
    }

   public function save()
    {
      include_once "produto/models/ProdutoDAO.php";

      $dao = new ProdutoDAO();

      if(empty($this->id_produto))
       {
         $dao->insert($this);
       }
      else
       {
         $dao->update($this);
       } 
      
    }
   
   public function getFornecedores()
    {
     include_once "fornecedor/models/FornecedorDAO.php";

     $dao = new FornecedorDAO();

     $this->fornecedores = $dao->selectFornecedores();
    } 

   public function getAll()
    {
      include_once "produto/models/ProdutoDAO.php";

      $dao = new ProdutoDAO();

      $this->rows = $dao->select();
    } 

   public function getByID(int $id)
    {
      include_once "produto/models/ProdutoDAO.php";

      $dao = new ProdutoDAO();

      $obj = $dao->selectByID((int)$id);
      
      return $obj ? $obj : new ProdutoModel();
       
    }

   public function delete($delete_rows)
    {
      $delete_rows = json_decode($delete_rows);
      foreach($delete_rows as $i => $value)
       {
        $delete_rows[$i] = (int)$value;
       }

      include_once "produto/models/ProdutoDAO.php";

      $dao = new ProdutoDAO();

      $dao->delete($delete_rows);
    } 
 }

?>