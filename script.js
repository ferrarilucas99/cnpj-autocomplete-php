toastr.options = {
    "closeButton": true,
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "3000",
    "extendedTimeOut": "1000",
};
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

    // ANTIGA REQUISICAO FUNCIONAVA APENAS COM PLUGIN PARA DESABILITAR O CORS
    // $.ajax({
    //     async: true,
    //     crossDomain: true,
    //     url: 'https://receitaws.com.br/v1/cnpj/'+ cnpj.val(),
    //     type: 'get',
    //     headers: {
    //         Accept: 'application/json'
    //     },
    //     xhrFields: {
    //         withCredentials: true
    //     },
    //     success: function(data) {
    //         name.val(data.nome);
    //         situation.val(data.situacao);
    //         opening.val(data.abertura);
    //         type.val(data.tipo);
    //         porte.val(data.porte);
    //         natureza_juridica.val(data.natureza_juridica);
    //         logradouro.val(data.logradouro);
    //         numero.val(data.numero);
    //         complemento.val(data.complemento);
    //         municipio.val(data.municipio);
    //         bairro.val(data.bairro);
    //         uf.val(data.uf);
    //         cep.val(data.cep);
    //         email.val(data.email);
    //         telefone.val(data.telefone);
    //         data_situacao.val(data.data_situacao);
    //         ultima_atualizacao.val(data.ultima_atualizacao);
    //         status.val(data.status);
    //         fantasia.val(data.fantasia);
    //         efr.val(data.efr);
    //         motivo_situacao.val(data.motivo_situacao);
    //         situacao_especial.val(data.situacao_especial);
    //         data_situacao_especial.val(data.data_situacao_especial);
    //         capital_social.val(data.capital_social);
    //         extra.val(data.extra);

    //         const atividadePrincipal = data.atividade_principal;

    //         atividadePrincipal.forEach(atividade => {
    //             atividade_principal_code.val(atividade.code);
    //             atividade_principal_text.val(atividade.text);
    //         });

    //         const atividadesSecundarias = data.atividades_secundarias;

    //         atividadesSecundarias.forEach(atividade => {
    //             const codigo = atividade.code;
    //             const texto = atividade.text;

    //             const pCodigo = document.createElement('p');
    //             pCodigo.textContent = `Código: ${codigo}`;

    //             const pTexto = document.createElement('p');
    //             pTexto.innerHTML  = `Texto: ${texto} <br><hr>`;

    //             const divResult = document.getElementById('result');
    //             divResult.appendChild(pCodigo);
    //             divResult.appendChild(pTexto);
    //         });

    //         const qsa = data.qsa;

    //         qsa.forEach(q => {
    //             const nome = q.nome;
    //             const qual = q.qual;
    //             const pais_origem = q.pais_origem;
    //             const nome_resp_legal = q.nome_resp_legal;
    //             const qual_resp_legal = q.qual_resp_legal;

    //             const pNome = document.createElement('p');
    //             pNome.textContent = `Nome: ${nome}`;

    //             const pQual = document.createElement('p');
    //             pQual.textContent = `Qual: ${qual}`;

    //             const pPaisOrigem = document.createElement('p');
    //             pPaisOrigem.textContent = `País de origem: ${pais_origem}`;

    //             const pNomeRespLegal = document.createElement('p');
    //             pNomeRespLegal.textContent = `Nome responsável legal: ${nome_resp_legal}`;

    //             const pQualRespLegal = document.createElement('p');
    //             pQualRespLegal.innerHTML  = `Qual responsável legal: ${qual_resp_legal} <br><hr>`;

    //             const divQSA = document.getElementById('qsa');
    //             divQSA.appendChild(pNome);
    //             divQSA.appendChild(pQual);
    //             divQSA.appendChild(pPaisOrigem);
    //             divQSA.appendChild(pNomeRespLegal);
    //             divQSA.appendChild(pQualRespLegal);
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //     }
    // });

    $.ajax({
        data: $(this).serialize(),
        async: true,
        crossDomain: true,
        url: $(this).attr('action'),
        type: 'get',
        headers: {
            Accept: 'application/json'
        },
        success: function (data){
            document.getElementById('result').innerHTML = "";
            document.getElementById('qsa').innerHTML = "";
            var response = JSON.parse(data);
            var obj = JSON.parse(response.data);
            console.log(obj);
            if (Object.keys(obj).indexOf('message') !== -1) {
                console.log('existe');
                var msg = obj.message == 'Too many requests, please try again later.' ? 'Muitas requisiçoes, aguarde um momento' : obj.message;
                toastr.error(msg);
                // toastr.error('Algo de erraro não está certo!');
            } else {
                console.log('não existe');
                toastr.success('Sucesso!');
            }
            const dateString = obj.ultima_atualizacao;
            const date = new Date(dateString);
            const year = date.getFullYear();
            const month1 = date.getMonth() + 1; // Os meses em JavaScript são indexados a partir de zero
            const month = month1 >= 10 ? month1 : '0'+month1;
            const day1 = date.getDate();
            const day = day1 >= 10 ? day1 : '0'+day1;
            const hours = date.getHours();
            const minutes = date.getMinutes();
            name.val(obj.nome);
            situation.val(obj.situacao);
            opening.val(obj.abertura);
            type.val(obj.tipo);
            porte.val(obj.porte);
            natureza_juridica.val(obj.natureza_juridica);
            logradouro.val(obj.logradouro);
            numero.val(obj.numero);
            complemento.val(obj.complemento);
            municipio.val(obj.municipio);
            bairro.val(obj.bairro);
            uf.val(obj.uf);
            cep.val(obj.cep);
            email.val(obj.email);
            telefone.val(obj.telefone);
            data_situacao.val(obj.data_situacao);
            // ultima_atualizacao.val(obj.ultima_atualizacao);
            ultima_atualizacao.val(day+'/'+month+'/'+year+' '+hours+':'+minutes);
            status.val(obj.status);
            fantasia.val(obj.fantasia);
            efr.val(obj.efr);
            motivo_situacao.val(obj.motivo_situacao);
            situacao_especial.val(obj.situacao_especial);
            data_situacao_especial.val(obj.data_situacao_especial);
            capital_social.val(obj.capital_social);
            extra.val(obj.extra);

            const atividadePrincipal = obj.atividade_principal;

            atividadePrincipal.forEach(atividade => {
                atividade_principal_code.val(atividade.code);
                atividade_principal_text.val(atividade.text);
            });

            const atividadesSecundarias = obj.atividades_secundarias;

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

            const qsa = obj.qsa;

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
        error: function(data){
            toastr.error('Algo de errado!');
        }
    });
});