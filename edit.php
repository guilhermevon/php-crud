<?php
$data = json_decode(file_get_contents('data.json'), true);
$index = $_GET['index'];
$user = $data[$index];
?>

<form action="update.php" method="post">
    <input type="hidden" name="index" value="<?= $index ?>">
    Nome: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    <button type="submit">Atualizar</button>
</form>
