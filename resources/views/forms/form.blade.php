<form action="/submit-form" method="post" class="container mt-5">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="rg" class="form-label">RG:</label>
        <input type="text" class="form-control" id="rg" name="rg">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf">
    </div>
    <div class="mb-3">
        <label for="birthdate" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" id="birthdate" name="birthdate">
    </div>
    <div class="mb-3">
        <label for="mother_name" class="form-label">Nome da Mãe:</label>
        <input type="text" class="form-control" id="mother_name" name="mother_name">
    </div>
    <div class="mb-3">
        <label for="expedition_date" class="form-label">Data de expedição:</label>
        <input type="date" class="form-control" id="expedition_date" name="expedition_date">
    </div>
    <div class="mb-3">
        <label for="issuing_authority" class="form-label">Órgão Emissor:</label>
        <select class="form-select" id="issuing_authority" name="issuing_authority">
            <option value="SSP">SSP - Secretaria de Segurança Pública</option>
            <option value="Detran">Detran - Departamento de Trânsito</option>
            <option value="IFP">IFP - Instituto de Identificação</option>
            <!-- Adicione outras opções conforme necessário -->
        </select>
    </div>
    <div class="mb-3">
        <label for="state" class="form-label">UF:</label>
        <select class="form-select" id="state" name="state">
            <option value="">Selecione o UF</option>
            @foreach ($states as $abbreviation => $name)
                <option value="{{ $abbreviation }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="naturalness" class="form-label">Naturalidade:</label>
        <input type="text" class="form-control" id="naturalness" name="naturalness">
    </div>
    <button type="submit" class="btn btn-primary" onclick="redirectAfterSubmit()">Enviar</button>

</form>

<script>
    function redirectAfterSubmit() {
        // Redirecionar para a página desejada após o envio do formulário
        window.location.href = '/success'; // Altere '/success' para a URL da sua página de sucesso
    }
</script>
