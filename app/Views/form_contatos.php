<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('/public/assets/css/form_contatos.css') ?>">
</head>
<body>
<div class="container row mx-auto">
    <div class="contact-info col-md-5">
        <h2>Exercício Zapi</h2>
        <p>Página de contato</p>
        <p><strong>Feito por:</strong></p>
        <p>Julio Cesar Ribeiro Lopes</p>
        <div class="social-icons mt-3">
            <a href="https://www.linkedin.com/in/julio-cesar-ribeiro-lopes-0039ba244/"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Julio-Lopes"><i class="bi bi-github"></i></a>
        </div>
    </div>
    <div class="form-container col-md-7">
        <h2>Entre em contato</h2>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <p class="mb-0"><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form id="contatoForm">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Nome" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="message" rows="4" placeholder="Mensagem" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Enviar</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('public/js/contato-form.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>