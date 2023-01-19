<?php

class FornecedorController
 {
   public static function list()
    {
     //Devolve a listagem de dados do fornecedor
     include_once "fornecedor/models/FornecedorModel.php";

     $model  = new FornecedorModel();
     $model->getAll();

     include_once "fornecedor/views/ListaFornecedor.php";
    } 

    public static function form()
     {
      //Devolve o formulário de dados do fornecedor
      include_once "fornecedor/models/FornecedorModel.php";

      $model = new FornecedorModel();

      if(isset($_GET["id_fornecedor"]))
        $model = $model->getByID((int)$_GET["id_fornecedor"]);
        
      include_once "fornecedor/views/FormFornecedor.php";  
     }
    
    public static function save()
     {
      include_once "fornecedor/models/FornecedorModel.php";
       
      $model = new FornecedorModel();
      $model->_initialize($_POST);
      $model->save();

      if(!isset($_POST["next"]))       
        header("Location: /fornecedores");
      else if($_POST["next"] == "produtos")  
        header("Location: /produtos");
      else
        header("Location: /fornecedores");

     } 
    
    public static function delete()
     {
      include_once "fornecedor/models/FornecedorModel.php";
      
      $model = new FornecedorModel();
      $model->delete($_POST["DeleteRows"]);

      header("Location: /fornecedores");            
     } 
 }

?>