<?php
$data = json_decode(file_get_contents('data.json'), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e JSON</title>
</head>
<body>
    <h2>Usuários</h2>
    <table border="1">
        <tr><th>Nome</th><th>Email</th><th>Ações</th></tr>
        <?php foreach ($data as $index => $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="edit.php?index=<?= $index ?>">Editar</a> |
                    <a href="delete.php?index=<?= $index ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Adicionar Novo Usuário</h2>
    <form action="create.php" method="post">
        Nome: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
