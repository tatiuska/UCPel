<?php 
    require_once "inicia.php";
    $PDO = conecta_bd();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionário</title>
</head>
<body>
    <h1>Cadastro de funcionário</h1>
    <p><a href="form_inclui.php">Cadastrar funcionário</a></p>
    <h2>Lista de funcionários</h2>
    <?php 
        $stmt_count = $PDO->prepare("SELECT COUNT(*) AS total FROM `funcionario`");
        $stmt_count->execute();
        $stmt = $PDO->prepare("SELECT cod_func, nome_func, foto_func_endereco FROM `funcionario` ORDER BY nome_func");
        $stmt->execute();

        $total = $stmt_count->fetchColumn();
        if($total > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Foto</th>
                </tr>
            </thead>

            <tbody>
                <?php while($resultado = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $resultado['nome_func'] ?></td>
                        <td><?php echo $resultado['foto_func_endereco'] ?></td>
                        <td><?php echo "<img src='" . $resultado['foto_func_endereco'] . "'>" ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <p>Total de funcionários cadastrados: <?php echo $total ?></p>
        <?php else: ?>
            <p>Não há funcionário cadastrado.</p>
        <?php endif; ?>
</body>
</html>