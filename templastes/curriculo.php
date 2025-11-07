<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Currículo de <?php echo $nome; ?></title>
    <style>
        body { background-color: #f8f9fa; }
        .curriculo-container { max-width: 800px; margin: 2rem auto; background-color: #ffffff; border: 1px solid #dee2e6; box-shadow: 0 0.5rem 1rem rgba(0,0,0,.05); padding: 3rem; }
        .print-button { position: fixed; bottom: 20px; right: 20px; z-index: 1000; }
        @media print {
            body { background-color: #ffffff; }
            .curriculo-container { margin: 0; border: none; box-shadow: none; padding: 0; }
            .print-button { display: none; }
        }
    </style>
</head>
<body>
    <button class="btn btn-primary print-button" onclick="window.print()">
        Baixar PDF / Imprimir
    </button>
    <div class="curriculo-container">
        <header class="text-center mb-5">
            <h1 class="display-5 mb-1"><?php echo $nome; ?></h1>
            <p class="lead mb-0">
                <?php echo $email; ?> | <?php echo $telefone; ?>
            </p>
            <p class="text-muted">
                <?php echo $data_nascimento_formatada; ?> (<?php echo $idade; ?> anos)
            </p>
        </header>
        <section class="mb-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Resumo Profissional</h2>
            <p class="text-secondary"><?php echo nl2br($resumo); ?></p>
        </section>
        <?php if (!empty($experiencias)): ?>
        <section class="mb-5">
            <h2 class="h4 border-bottom pb-2 mb-3">Experiência Profissional</h2>
            <?php foreach ($experiencias as $exp): ?>
            <div class="mb-3">
                <h5 class="mb-0"><?php echo $exp['cargo']; ?></h5>
                <h6 class="text-primary mb-1"><?php echo $exp['empresa']; ?></h6>
                <small class="text-muted"><?php echo $exp['periodo']; ?></small>
            </div>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>
        <?php if (!empty($referencias)): ?>
        <section>
            <h2 class="h4 border-bottom pb-2 mb-3">Referências</h2>
            <?php foreach ($referencias as $ref): ?>
            <div class="mb-2">
                <strong><?php echo $ref['nome']; ?></strong> - 
                <span class="text-secondary"><?php echo $ref['contato']; ?></span>
            </div>
            <?php endforeach; ?>
        </section>
        <?php endif; ?>
    </div>
</body>
</html>
