# 📄 Gerador de Currículo (UNIPAR - Fundamentos de Programação para Internet)

Este projeto é um **Gerador de Currículo** desenvolvido como Atividade Prática Orientada (APO) para a disciplina de Fundamentos de Programação para Internet na UNIPAR.

O gerador permite que o usuário preencha seus dados pessoais, experiências profissionais e referências para, em seguida, gerar um currículo formatado e pronto para impressão ou download em PDF.

---

## ✨ Funcionalidades

* **Entrada de Dados Pessoais:** Coleta nome, data de nascimento, email, telefone e um resumo profissional.
* **Cálculo Automático de Idade:** A idade é calculada dinamicamente via JavaScript com base na data de nascimento fornecida.
* **Campos Dinâmicos:** Uso de jQuery para adicionar e remover múltiplos campos de **Experiências Profissionais** e **Referências Pessoais**.
* **Geração de Currículo:** O currículo final é gerado em uma nova aba usando PHP, com uma estrutura limpa e responsiva (Bootstrap).
* **Impressão/Exportação:** Funcionalidade de impressão nativa (`window.print()`) para salvar o currículo como PDF ou imprimi-lo diretamente.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP (para processamento de formulário e geração da página do currículo).
* **Frontend:** HTML5, CSS3, Bootstrap 5.3 (para estilização e layout).
* **Scripts:** JavaScript e jQuery 3.x (para manipulação do DOM e lógica de campos dinâmicos).

---

## 🚀 Estrutura do Projeto

O projeto segue a seguinte organização de arquivos:

/Gerador-de-Curriculo-main/ index.php # Formulário de entrada de dados (Front-end). gerar-curriculo.php # Script PHP que processa o POST e prepara os dados. README.md # Este arquivo. /js/ main.js # Lógica JavaScript/jQuery para campos dinâmicos e cálculo de idade. /templates/ curriculo.php # Template HTML/PHP para a exibição do currículo gerado. /css/ style.css # Estilos customizados (se houver, além do Bootstrap).

* **Nota:** No projeto atual, o arquivo de processamento é `gerar-curriculo.php`, e o formulário em `index.php` envia os dados para ele.

---

## 📦 Requisitos para Execução

Para rodar este projeto localmente, você precisará de:

1.  **PHP 7.4+** (ou superior)
2.  **Servidor Web Local** (como XAMPP, WAMP, MAMP, ou o servidor embutido do PHP)
3.  **Git** (para clonagem do repositório, opcional)

---

## 📝 Uso

1.  **Acesse o formulário** em `index.php`.
2.  **Preencha os Dados Pessoais** e o Resumo Profissional.
3.  Use os botões **`+ Adicionar`** nas seções de Experiências Profissionais e Referências Pessoais para incluir mais itens.
4.  Clique no botão **`Gerar Currículo`**. O currículo será aberto em uma nova aba.
5.  Na página do currículo, use o botão **`Baixar PDF / Imprimir`** para salvar ou imprimir o documento.

---

## 👤 Informações do Desenvolvedor

* **Aluno:** Guilherme Miguel Menon
* **RA:** 09054158
* **Disciplina:** Fundamentos de Programação para Internet

---

## 💡 Observações e Possíveis Melhorias

O projeto é funcional, mas há espaço para aprimoramento, como:

* Implementar **validações** robustas no lado do cliente (JavaScript) e do servidor (PHP).
* Adicionar funcionalidade de **upload de foto de perfil**.
* Melhorar a **acessibilidade** geral da aplicação.
* Realizar **testes responsivos** mais rigorosos para garantir a visualização ideal em todos os dispositivos.
* Incluir a seção de **Formação Acadêmica**, seguindo a lógica dos campos dinâmicos de experiência.
