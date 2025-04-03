<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        input, textarea { width: 100%; margin-bottom: 10px; padding: 8px; }
        button { background: blue; color: white; padding: 10px; border: none; cursor: pointer; }
        .error { color: red; font-size: 14px; }
        .success { color: green; font-size: 14px; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Contato</h2>

    <?php if (session()->getFlashdata('success')) : ?>
        <p class="success"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="error">
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="contato/submit" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="<?= old('name') ?>" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?= old('email') ?>" required>

        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" required><?= old('message') ?></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>