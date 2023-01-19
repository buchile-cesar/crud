<?php

class FornecedorModel
 {
   public $id_fornecedor, $nome_vendedor, $email_vendedor, $cnpj, $razao_social, $nome_fantasia, $telefone, $celular_vendedor;
   public $rows;

   public function _initialize($request)
    {
      
      $this->id_fornecedor = $request["id_fornecedor"];
      $this->nome_vendedor = $request["nome_vendedor"]; 
      $this->email_vendedor = $request["email_vendedor"];
      $this->cnpj = $request["cnpj"];
      $this->razao_social = $request["razao_social"]; 
      $this->nome_fantasia = $request["nome_fantasia"]; 
      $this->telefone = $request["telefone"]; 
      $this->celular_vendedor = $request["celular_vendedor"];
      
    }

   public function save()
    {
      include_once "fornecedor/models/FornecedorDAO.php";

      $dao = new FornecedorDAO();

      if(empty($this->id_fornecedor))
       {
         $dao->insert($this);
       }
      else
       {
         $dao->update($this);
       } 
      
    }
   
   public function getAll()
    {
      include_once "fornecedor/models/FornecedorDAO.php";

      $dao = new FornecedorDAO();

      $this->rows = $dao->select();
    } 

   public function getByID(int $id)
    {
      include_once "fornecedor/models/FornecedorDAO.php";

      $dao = new FornecedorDAO();

      $obj = $dao->selectByID($id);
      
      return $obj ? $obj : new FornecedorModel();
       
    }

   public function delete($delete_rows)
    {
      $delete_rows = json_decode($delete_rows);
      foreach($delete_rows as $i => $value)
       {
        $delete_rows[$i] = (int)$value;
       }
      
      include_once "fornecedor/models/FornecedorDAO.php";

      $dao = new FornecedorDAO();
      $dao->delete($delete_rows);
    } 
 }

?>