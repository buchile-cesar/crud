<?php

class FornecedorDAO
 {
    private $connection;

    public function __construct()
     {
        $conf = json_decode(file_get_contents("../BD/config.json"), true);         
        $this->connection = new PDO($conf["dsn"], $conf["user"], $conf["pwd"]);
     }
    
    public function insert(FornecedorModel $model)
     {
       $sql = "INSERT INTO fornecedor (nome_vendedor, email_vendedor, cnpj, razao_social, nome_fantasia, telefone, celular_vendedor) VALUES (?, ?, ?, ?, ?, ?, ?)";

       $stmt = $this->connection->prepare($sql);
       $stmt->bindValue(1, $model->nome_vendedor);
       $stmt->bindValue(2, $model->email_vendedor);
       $stmt->bindValue(3, $model->cnpj);
       $stmt->bindValue(4, $model->razao_social);
       $stmt->bindValue(5, $model->nome_fantasia);
       $stmt->bindValue(6, $model->telefone);
       $stmt->bindValue(7, $model->celular_vendedor);

       $stmt->execute();
     }

    public function update(FornecedorModel $model)
     {
        $sql = "UPDATE fornecedor SET nome_vendedor = ?, email_vendedor = ?, cnpj = ?, razao_social = ?, nome_fantasia = ?, telefone = ?, celular_vendedor = ? WHERE id_fornecedor = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $model->nome_vendedor);
        $stmt->bindValue(2, $model->email_vendedor);
        $stmt->bindValue(3, $model->cnpj);
        $stmt->bindValue(4, $model->razao_social);
        $stmt->bindValue(5, $model->nome_fantasia);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->celular_vendedor);
        $stmt->bindValue(8, $model->id_fornecedor);
 
        $stmt->execute();          
     } 

    public function select()
     {
        $sql = "SELECT * FROM fornecedor";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
     } 
    
    public function selectFornecedores()
     {
        $sql = "SELECT id_fornecedor, nome_fantasia FROM fornecedor";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
     }

    public function selectByID(int $id)
     {
        include_once "fornecedor/models/FornecedorModel.php";

        $sql = "SELECT * FROM fornecedor WHERE id_fornecedor = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FornecedorModel");
     } 
     
    public function delete($delete_rows)
     {
      $sql = "DELETE FROM fornecedor WHERE id_fornecedor IN (" . implode(", ", $delete_rows) . ")";

      $stmt = $this->connection->prepare($sql);
      $stmt->execute(); 
     } 
 }

?>
