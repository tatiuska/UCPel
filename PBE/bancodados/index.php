<?php 
    require_once "conexoes.php";

    $conn = conectaPDO();

    $stmt = $conn->prepare('SELECT Host
        ,User
        ,Select_priv
        ,Insert_priv
        ,Update_priv
        ,Delete_priv 
        FROM user 
        WHERE User = :nome_usuario 
        AND Select_priv = :permissao_selecao');

    $nome_usuario = 'root';
    $permissao_selecao = 'Y';
    $stmt->bindParam(':nome_usuario', $nome_usuario, PDO::PARAM_STR);
    $stmt->bindParam(':permissao_selecao', $permissao_selecao, PDO::PARAM_STR);
    $stmt->execute();

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td><strong>Host</strong></td>";
    echo "<td><strong>User</strong></td>";
    echo "<td><strong>Select</strong></td>";
    echo "<td><strong>Insert</strong></td>";
    echo "<td><strong>Update</strong></td>";
    echo "<td><strong>Delete</strong></td>";
    echo "</tr>";

    while($registro = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $registro['Host'] . "</td>" . 
            "<td>" . $registro['User'] . "</td>" . 
            "<td>" . $registro['Select_priv'] . "</td>" . 
            "<td>" . $registro['Insert_priv'] . "</td>" . 
            "<td>" . $registro['Update_priv'] . "</td>" . 
            "<td>" . $registro['Delete_priv'] . "</td>:";
        echo "</tr>";
    }

    echo "</table>";
?>