<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 mb-4">Gerador de Currículo</h1>
                    <form action="gerar-curriculo.php" method="POST" target="_blank">
                        <h2 class="h5 border-bottom pb-2 mb-3">Dados Pessoais</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="col-md-3">
                                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>
                            <div class="col-md-3">
                                <label for="idade" class="form-label">Idade</label>
                                <input type="number" class="form-control" id="idade" name="idade" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-md-6">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone">
                            </div>
                            <div class="col-12">
                                <label for="resumo" class="form-label">Resumo Profissional</label>
                                <textarea class="form-control" id="resumo" name="resumo" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-5 mb-3 border-bottom pb-2">
                            <h2 class="h5 mb-0">Experiências Profissionais</h2>
                            <button type="button" id="add-experiencia" class="btn btn-primary btn-sm">
                                + Adicionar
                            </button>
                        </div>
                        <div id="experiencias-wrapper">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-5 mb-3 border-bottom pb-2">
                            <h2 class="h5 mb-0">Referências Pessoais</h2>
                            <button type="button" id="add-referencia" class="btn btn-primary btn-sm">
                                + Adicionar
                            </button>
                        </div>
                        <div id="referencias-wrapper">
                        </div>
                        <hr class="my-4">
                        <button type="submit" class="btn btn-success btn-lg">Gerar Currículo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>