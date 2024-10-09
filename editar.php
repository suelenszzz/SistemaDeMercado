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
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome= $_POST['nome'];
    $descricao= $_POST['descricao'];
    $preco= $_POST['preco'];
    $quantidade= $_POST['quantidade'];

    $sql="UPDATE produtos SET nome=:nome,descricao=:descricao,preco=:preco,quantidade=:quantidade WHERE id=:id";
    $sql = $pdo->prepare($sql);
    $sql->execute(params: [
        ":nome"=> $nome,
        "descricao"=> $descricao,
        "preco"=> $preco,
        "quantidade"=> $quantidade,
        "id"=> $id
    ] );
    echo"Produto atualizado com sucesso";
}
?>

<form action: "editar.php" method:"post" >
        Nome: <input type="text" id="nome" name="nome"><
        Descricao:<input type="text" id="descricao" name="descricao">
        Preço: <input type="text" id="preco" name="preco">
        Quantidade: <input type="number" id="quantidade" name="quantidade"><br>

        <input type="submit" value="Atualizar Produto">        
    </form>
