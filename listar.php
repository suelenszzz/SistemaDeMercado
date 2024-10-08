<?php 

include 'conexao.php';

$sql = $pdo->query("SELECT * FROM produtos");
$produtos = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Lista de Produtos</h1>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRICAO</th>
            <th>PRECO</th>
            <th>QUANTIDADE</th>
        </tr>

        <?php foreach($produtos as $produto):?>
            <tr>
            <th> <?= $produto['id'] ?></th>
            <th> <?= $produto['nome'] ?></th>
            <th> <?= $produto['descricao'] ?></th>
            <th> <?= $produto['preco'] ?></th>
            <th> <?= $produto['quantidade'] ?></th>
            <td>
                <a href="editar.php?id=<?=$a['id']; ?>">[Editar]</a>
                <a href="excluir.php?id=<?=$a['id']; ?>">[Excluir]</a>
            </td>
        </tr> 
        <?php endforeach ?>
    </table>