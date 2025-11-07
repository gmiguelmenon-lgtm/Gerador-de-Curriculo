<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Acesso inválido.";
    exit;
}

$nome = htmlspecialchars($_POST['nome'] ?? 'N/A');
$email = htmlspecialchars($_POST['email'] ?? 'N/A');
$telefone = htmlspecialchars($_POST['telefone'] ?? 'N/A');
$resumo = htmlspecialchars($_POST['resumo'] ?? '');
$data_nascimento = $_POST['data_nascimento'] ?? 'N/A';
$idade = htmlspecialchars($_POST['idade'] ?? 'N/A');

if ($data_nascimento != 'N/A') {
    $dataObj = new DateTime($data_nascimento);
    $data_nascimento_formatada = $dataObj->format('d/m/Y');
} else {
    $data_nascimento_formatada = 'N/A';
}

$experiencias = [];
if (isset($_POST['experiencia']['cargo']) && is_array($_POST['experiencia']['cargo'])) {
    $total_exp = count($_POST['experiencia']['cargo']);
    for ($i = 0; $i < $total_exp; $i++) {
        $data_inicio = 'N/A';
        if (!empty($_POST['experiencia']['inicio'][$i])) {
            $data_inicio = (new DateTime($_POST['experiencia']['inicio'][$i]))->format('M/Y');
        }
        $data_fim = 'N/A';
        if (!empty($_POST['experiencia']['fim'][$i])) {
            $data_fim = (new DateTime($_POST['experiencia']['fim'][$i]))->format('M/Y');
        }
        if (isset($_POST['experiencia']['atual'][$i]) && $_POST['experiencia']['atual'][$i] == '1') {
            $data_fim = 'Atual';
        }
        $experiencias[] = [
            'cargo'   => htmlspecialchars($_POST['experiencia']['cargo'][$i]),
            'empresa' => htmlspecialchars($_POST['experiencia']['empresa'][$i]),
            'periodo' => $data_inicio . ' - ' . $data_fim
        ];
    }
}

$referencias = [];
if (isset($_POST['referencia']['nome']) && is_array($_POST['referencia']['nome'])) {
    $total_ref = count($_POST['referencia']['nome']);
    for ($i = 0; $i < $total_ref; $i++) {
        $referencias[] = [
            'nome'    => htmlspecialchars($_POST['referencia']['nome'][$i]),
            'contato' => htmlspecialchars($_POST['referencia']['contato'][$i]),
        ];
    }
}

include 'templates/curriculo.php';
?>