<?php

class ProdutoDAO
 {
    private $connection;

    public function __construct()
     {
        $conf = json_decode(file_get_contents("../BD/config.json"), true);         
        $this->connection = new PDO($conf["dsn"], $conf["user"], $conf["pwd"]);
     }
    
    public function insert(ProdutoModel $model)
     {
       $sql = "INSERT INTO produto (id_fornecedor, nome_produto, valor_produto, peso, quantidade_estoque) VALUES (?, ?, ?, ?, ?)";

       $stmt = $this->connection->prepare($sql);
       $stmt->bindValue(1, $model->id_fornecedor);
       $stmt->bindValue(2, $model->nome_produto);
       $stmt->bindValue(3, $model->valor_produto);
       $stmt->bindValue(4, $model->peso);
       $stmt->bindValue(5, $model->quantidade_estoque);
      
       $stmt->execute();
     }

    public function update(ProdutoModel $model)
     {
        $sql = "UPDATE produto SET id_fornecedor = ?, nome_produto = ?, valor_produto = ?, peso = ?, quantidade_estoque = ? WHERE id_produto = ?";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $model->id_fornecedor);
        $stmt->bindValue(2, $model->nome_produto);
        $stmt->bindValue(3, $model->valor_produto);
        $stmt->bindValue(4, $model->peso);
        $stmt->bindValue(5, $model->quantidade_estoque);
        $stmt->bindValue(6, $model->id_produto);
        
        $stmt->execute();          
     } 

    public function select()
     {
        $sql = "SELECT p.id_produto, p.id_fornecedor, f.nome_fantasia, p.nome_produto, p.valor_produto, p.peso, p.quantidade_estoque FROM produto as p inner join fornecedor as f on p.id_fornecedor = f.id_fornecedor";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
     } 
    
    public function selectByID(int $id)
     {
        include_once "produto/models/ProdutoModel.php";

        $sql = "SELECT p.id_produto, p.id_fornecedor, f.nome_fantasia, p.nome_produto, p.valor_produto, p.peso, p.quantidade_estoque FROM produto as p inner join fornecedor as f on p.id_fornecedor = f.id_fornecedor WHERE p.id_produto = ?";
        
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
     } 
     
    public function delete($delete_rows)
     {
        $sql = "DELETE FROM produto WHERE id_produto IN (" . implode(", ", $delete_rows) . ")";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
     } 
 }

?>
