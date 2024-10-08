<?php 
include 'conexao.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql= "SELECT FROM produtos WHERE id= :id";
    $sql = $pdo->prepare($sql);
    $sql->execute([':id' => $id]);
    $produtos = $sql->fetch(PDO::FETCH_ASSOC);

    if(!$produtos){
        echo "Produto não encontrado";
        exit;
    }
}
if()
?>