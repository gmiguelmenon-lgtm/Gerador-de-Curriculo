$(document).ready(function() {
    $('#data_nascimento').on('change', function() {
        const dataNasc = $(this).val();
        if (dataNasc) {
            const hoje = new Date();
            const nascimento = new Date(dataNasc);
            let idade = hoje.getFullYear() - nascimento.getFullYear();
            const mes = hoje.getMonth() - nascimento.getMonth();
            if (mes < 0 || (mes === 0 && hoje.getDate() < nascimento.getDate())) {
                idade--;
            }
            $('#idade').val(idade);
        }
    });

    $('#add-experiencia').on('click', function() {
        const novoCampo = `
            <div class="row g-3 mb-3 p-3 border rounded position-relative">
                <div class="col-md-6">
                    <label class="form-label">Cargo</label>
                    <input type="text" class="form-control" name="experiencia[cargo][]">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Empresa</label>
                    <input type="text" class="form-control" name="experiencia[empresa][]">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Data de Início</label>
                    <input type="date" class="form-control" name="experiencia[inicio][]">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Data de Fim</label>
                    <input type="date" class="form-control" name="experiencia[fim][]">
                </div>
                <div class="col-md-4 d-flex align-items-end">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="experiencia[atual][]" value="1">
                        <label class="form-check-label">Emprego Atual</label>
                    </div>
                </div>
                <button type="button" class="btn-close remove-field" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
            </div>
        `;
        $('#experiencias-wrapper').append(novoCampo);
    });

    $('#add-referencia').on('click', function() {
        const novoCampo = `
            <div class="row g-3 mb-3 p-3 border rounded position-relative">
                <div class="col-md-6">
                    <label class="form-label">Nome da Referência</label>
                    <input type="text" class="form-control" name="referencia[nome][]">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Contato (Telefone ou Email)</label>
                    <input type="text" class="form-control" name="referencia[contato][]">
                </div>
                <button type="button" class="btn-close remove-field" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
            </div>
        `;
        $('#referencias-wrapper').append(novoCampo);
    });

    $(document).on('click', '.remove-field', function() {
        $(this).parent().remove();
    });
});
