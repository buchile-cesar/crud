<?php

class ProdutoController
 {
   public static function list()
    {
     //Devolve a listagem de dados do fornecedor
     include_once "produto/models/ProdutoModel.php";

     $model  = new ProdutoModel();
     $model->getAll();

     include_once "produto/views/ListaProduto.php";
     
    } 

    public static function form()
     {
      include_once "produto/models/ProdutoModel.php";      
      
      $model = new ProdutoModel();
      if(isset($_GET["id_produto"])) 
        $model = $model->getByID((int)$_GET["id_produto"]); 
      
      $model->getFornecedores();
      
      if(count($model->fornecedores) > 0)
       {
        include_once "produto/views/FormProduto.php";  
       }
      else
       {          
        $_SESSION["message"] = ["type" => "error", "txt"=> "Nenhum fornecedor cadastrado!"];
        header("Location: /produtos");
       }

     }
    
    public static function save()
     {
      include_once "produto/models/ProdutoModel.php";
       
      $model = new ProdutoModel();
      $model->_initialize($_POST);
      $model->save();

      header("Location: /produtos");

     } 
    
    public static function delete()
     {
      include_once "produto/models/ProdutoModel.php";
      
      $model = new ProdutoModel();
      $model->delete($_POST["DeleteRows"]);

      header("Location: /produtos");

     } 
 }

?>