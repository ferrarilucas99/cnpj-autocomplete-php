<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Consulta CNPJ</title>
    <style>
        #result,
        #qsa{
            max-height: 350px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center flex-column">
        <h1 style="text-align: center;">Consultar CNPJ</h1>

        <form action="" id="my-form">
            <input type="text" name="cnpj" id="cnpj" class="form-control">

            <div class="row">
                <div class="col-4">
                <label for="name">Nome:</label>
                <input type="text" name="nome" id="name" class="form-control">
                </div>

                <div class="col-4">
                <label for="situation">Situação:</label>
                <input type="text" name="situacao" id="situation" class="form-control">
                </div>
                
                <div class="col-4">
                <label for="opening">Abertura:</label>
                <input type="text" name="abertura" id="opening" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                <label for="type">Tipo:</label>
                <input type="text" name="tipo" id="type" class="form-control">
                </div>

                <div class="col-4">
                <label for="porte">Porte:</label>
                <input type="text" name="porte" id="porte" class="form-control">
                </div>

                <div class="col-4">
                <label for="natureza_juridica">Natureza jurídica:</label>
                <input type="text" name="natureza_juridica" id="natureza_juridica" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                <label for="atividade_principal_code">Código atividade principal:</label>
                <input type="text" name="atividade_principal_code" id="atividade_principal_code" class="form-control">
                </div>

                <div class="col-6">
                <label for="atividade_principal_text">Nome atividade principal:</label>
                <input type="text" name="atividade_principal_text" id="atividade_principal_text" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                <label for="logradouro">Logradouro:</label>
                <input type="text" name="logradouro" id="logradouro" class="form-control">
                </div>

                <div class="col-4">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" class="form-control">
                </div>

                <div class="col-4">
                <label for="complemento">Complemento:</label>
                <input type="text" name="complemento" id="complemento" class="form-control">
                </div>

                <div class="col-4">
                <label for="municipio">Município:</label>
                <input type="text" name="municipio" id="municipio" class="form-control">
                </div>

                <div class="col-4">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" class="form-control">
                </div>

                <div class="col-2">
                <label for="uf">UF:</label>
                <input type="text" name="uf" id="uf" class="form-control">
                </div>

                <div class="col-2">
                <label for="cep">CEP:</label>
                <input type="text" name="cep" id="cep" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="col-6">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <label for="data_situacao">Data Situação:</label>
                    <input type="text" name="data_situacao" id="data_situacao" class="form-control">
                </div>
                <div class="col-3">
                    <label for="ultima_atualizacao">Ultima Atualização:</label>
                    <input type="text" name="ultima_atualizacao" id="ultima_atualizacao" class="form-control">
                </div>
                <div class="col-3">
                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" class="form-control">
                </div>
                <div class="col-3">
                    <label for="fantasia">Fantasia:</label>
                    <input type="text" name="fantasia" id="fantasia" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <label for="efr">EFR:</label>
                    <input type="text" name="efr" id="efr" class="form-control">
                </div>
                <div class="col-4">
                    <label for="motivo_situacao">Motivo Situação:</label>
                    <input type="text" name="motivo_situacao" id="motivo_situacao" class="form-control">
                </div>
                <div class="col-4">
                    <label for="situacao_especial">Situacao Especial:</label>
                    <input type="text" name="situacao_especial" id="situacao_especial" class="form-control">
                </div>
                <div class="col-4">
                    <label for="data_situacao_especial">Data Situação Especial:</label>
                    <input type="text" name="data_situacao_especial" id="data_situacao_especial" class="form-control">
                </div>
                <div class="col-4">
                    <label for="capital_social">Capital Social:</label>
                    <input type="text" name="capital_social" id="capital_social" class="form-control">
                </div>
                <div class="col-4">
                    <label for="extra">Extra:</label>
                    <input type="text" name="extra" id="extra" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div id="result"></div>
                </div>
                <div class="col-6">
                    <div id="qsa"></div>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Pesquisar</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous">
    </script>

    <script>
        $(document).on('submit', '#my-form', function(e) {
            e.preventDefault();
            var $this = $(e.target);
            var cnpj = $('#cnpj');
            var name = $('#name');
            var situation = $('#situation');
            var opening = $('#opening');
            var type = $('#type');
            var porte = $('#porte');
            var natureza_juridica = $('#natureza_juridica');
            var logradouro = $('#logradouro');
            var numero = $('#numero');
            var complemento = $('#complemento');
            var municipio = $('#municipio');
            var bairro = $('#bairro');
            var uf = $('#uf');
            var cep = $('#cep');
            var email = $('#email');
            var telefone = $('#telefone');
            var data_situacao = $('#data_situacao');
            var ultima_atualizacao = $('#ultima_atualizacao');
            var status = $('#status');
            var fantasia = $('#fornasia');
            var efr = $('#efr');
            var motivo_situacao = $('#motivo_situacao');
            var situacao_especial = $('#situacao_especial');
            var data_situacao_especial = $('#data_situacao_especial');
            var capital_social = $('#capital_social');
            var extra = $('#extra');
            var atividade_principal_code = $('#atividade_principal_code');
            var atividade_principal_text = $('#atividade_principal_text');
            $.ajax({
                async: true,
                crossDomain: true,
                url: 'https://receitaws.com.br/v1/cnpj/'+ cnpj.val(),
                type: 'get',
                headers: {
                    Accept: 'application/json'
                },
                xhrFields: {
                    withCredentials: true
                },
                success: function(data) {
                    name.val(data.nome);
                    situation.val(data.situacao);
                    opening.val(data.abertura);
                    type.val(data.tipo);
                    porte.val(data.porte);
                    natureza_juridica.val(data.natureza_juridica);
                    logradouro.val(data.logradouro);
                    numero.val(data.numero);
                    complemento.val(data.complemento);
                    municipio.val(data.municipio);
                    bairro.val(data.bairro);
                    uf.val(data.uf);
                    cep.val(data.cep);
                    email.val(data.email);
                    telefone.val(data.telefone);
                    data_situacao.val(data.data_situacao);
                    ultima_atualizacao.val(data.ultima_atualizacao);
                    status.val(data.status);
                    fantasia.val(data.fantasia);
                    efr.val(data.efr);
                    motivo_situacao.val(data.motivo_situacao);
                    situacao_especial.val(data.situacao_especial);
                    data_situacao_especial.val(data.data_situacao_especial);
                    capital_social.val(data.capital_social);
                    extra.val(data.extra);

                    const atividadePrincipal = data.atividade_principal;

                    atividadePrincipal.forEach(atividade => {
                        atividade_principal_code.val(atividade.code);
                        atividade_principal_text.val(atividade.text);
                    });

                    const atividadesSecundarias = data.atividades_secundarias;

                    atividadesSecundarias.forEach(atividade => {
                        const codigo = atividade.code;
                        const texto = atividade.text;

                        const pCodigo = document.createElement('p');
                        pCodigo.textContent = `Código: ${codigo}`;

                        const pTexto = document.createElement('p');
                        pTexto.innerHTML  = `Texto: ${texto} <br><hr>`;

                        const divResult = document.getElementById('result');
                        divResult.appendChild(pCodigo);
                        divResult.appendChild(pTexto);
                    });

                    const qsa = data.qsa;

                    qsa.forEach(q => {
                        const nome = q.nome;
                        const qual = q.qual;
                        const pais_origem = q.pais_origem;
                        const nome_resp_legal = q.nome_resp_legal;
                        const qual_resp_legal = q.qual_resp_legal;

                        const pNome = document.createElement('p');
                        pNome.textContent = `Nome: ${nome}`;

                        const pQual = document.createElement('p');
                        pQual.textContent = `Qual: ${qual}`;

                        const pPaisOrigem = document.createElement('p');
                        pPaisOrigem.textContent = `País de origem: ${pais_origem}`;

                        const pNomeRespLegal = document.createElement('p');
                        pNomeRespLegal.textContent = `Nome responsável legal: ${nome_resp_legal}`;

                        const pQualRespLegal = document.createElement('p');
                        pQualRespLegal.innerHTML  = `Qual responsável legal: ${qual_resp_legal} <br><hr>`;

                        const divQSA = document.getElementById('qsa');
                        divQSA.appendChild(pNome);
                        divQSA.appendChild(pQual);
                        divQSA.appendChild(pPaisOrigem);
                        divQSA.appendChild(pNomeRespLegal);
                        divQSA.appendChild(pQualRespLegal);
                    });
                },
                error: function(xhr, status, error) {
                }
            });
        });
    </script>
</body>
</html>