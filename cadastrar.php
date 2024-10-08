<?php 

include 'conexao.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome= $_POST['nome'];
    $descricao= $_POST['descricao'];
    $preco= $_POST['preco'];
    $quantidade= $_POST['quantidade'];

    $sql="INSERT INTO produtos(nome,descricao,preco,quantidade) VALUES (:nome,:descricao,:preco,:quantidade)";
    $sql = $pdo->prepare($sql);
    $sql->execute(params: [
        ":nome"=> $nome,
        "descricao"=> $descricao,
        "preco"=> $preco,
        "quantidade"=> $quantidade
    ]);
    
    echo"Produtos Cadastrados!";
}
?>
    <form action: "cadastrar.php" method:"post" >
    <br>Nome: <input type="text" id="nome" name="nome"><
        Descricao:<input type="text" id="descricao" name="descricao">
        Preço: <input type="text" id="preco" name="preco">
        Quantidade: <input type="number" id="quantidade" name="quantidade"><br>

        <input type="submit" value="Cadastrar">        
    </form>