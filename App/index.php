<?php

session_start();

include_once "fornecedor/controllers/FornecedorController.php";
include_once "produto/controllers/ProdutoController.php";

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$pathinfo = urldecode($url);

if(is_file($_SERVER['DOCUMENT_ROOT'] . $url))
 {
   return false;
 }   
else if($url === "/")
 {
   include_once "home/views/Home.php";
 }
else if($url === "/produtos")
 {
    ProdutoController::list();
 } 
else if($url === "/produto/form")
 {
    ProdutoController::form();
 } 
else if($url === "/produto/form/save")
 {
    ProdutoController::save();
 } 
else if($url === "/produtos/delete")
 {
    ProdutoController::delete();
 } 
 else if($url === "/fornecedores")
 {
    FornecedorController::list();
 } 
else if($url === "/fornecedor/form")
 {
    FornecedorController::form();
 } 
else if($url === "/fornecedor/form/save")
 {
   FornecedorController::save();
 } 
else if($url === "/fornecedores/delete")
 {
   FornecedorController::delete();
 }
else
 {
   echo "Error 404: Not found!";
 } 

?>
