<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Consulta CNPJ</title>
    <style>
        #result,
        #qsa{
            margin-top: 15px;
            max-height: 350px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center flex-column mb-5">
        <h1 style="text-align: center;">Consultar CNPJ</h1>

        <form action="/curl.php" id="my-form">
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj">
                    <label for="cnpj">CNPJ</label>
                </div>
                <button class="btn btn-success" type="submit" id="button-addon2"><i class="bi bi-search"></i> Pesquisar</button>
            </div>
        </form>
        <div class="row">
            <div class="col-4">
            <!-- <label for="name">Nome:</label>
            <input type="text" name="nome" id="name" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
                    <label for="name">Nome</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="situation">Situação:</label>
            <input type="text" name="situacao" id="situation" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="situation" placeholder="Situação" name="situacao">
                    <label for="situation">Situação</label>
                </div>
            </div>
            
            <div class="col-4">
            <!-- <label for="opening">Abertura:</label>
            <input type="text" name="abertura" id="opening" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="opening" placeholder="Abertura1" name="abertura">
                    <label for="opening">Abertura</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
            <!-- <label for="type">Tipo:</label>
            <input type="text" name="tipo" id="type" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="type" placeholder="tipo" name="tipo">
                    <label for="type">Tipo</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="porte">Porte:</label>
            <input type="text" name="porte" id="porte" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="porte" placeholder="porte" name="porte">
                    <label for="porte">Porte</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="natureza_juridica">Natureza jurídica:</label>
            <input type="text" name="natureza_juridica" id="natureza_juridica" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="natureza_juridica" placeholder="natureza_juridica" name="natureza_juridica">
                    <label for="natureza_juridica">Natureza jurídica</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
            <!-- <label for="atividade_principal_code">Código atividade principal:</label>
            <input type="text" name="atividade_principal_code" id="atividade_principal_code" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="atividade_principal_code" placeholder="atividade_principal_code" name="atividade_principal_code">
                    <label for="atividade_principal_code">Código atividade principal</label>
                </div>
            </div>

            <div class="col-6">
            <!-- <label for="atividade_principal_text">Nome atividade principal:</label>
            <input type="text" name="atividade_principal_text" id="atividade_principal_text" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="atividade_principal_text" placeholder="atividade_principal_text" name="atividade_principal_text">
                    <label for="atividade_principal_text">Nome atividade principal</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
            <!-- <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro" id="logradouro" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="logradouro" placeholder="logradouro" name="logradouro">
                    <label for="logradouro">Logradouro</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="logradouro" placeholder="logradouro" name="logradouro">
                    <label for="logradouro">Logradouro</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="complemento">Complemento:</label>
            <input type="text" name="complemento" id="complemento" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="complemento" placeholder="complemento" name="complemento">
                    <label for="complemento">Complemento</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="municipio">Município:</label>
            <input type="text" name="municipio" id="municipio" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="municipio" placeholder="municipio" name="municipio">
                    <label for="municipio">Município</label>
                </div>
            </div>

            <div class="col-4">
            <!-- <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="bairro" placeholder="bairro" name="bairro">
                    <label for="bairro">Bairro</label>
                </div>
            </div>

            <div class="col-2">
            <!-- <label for="uf">UF:</label>
            <input type="text" name="uf" id="uf" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="uf" placeholder="uf" name="uf">
                    <label for="uf">UF</label>
                </div>
            </div>

            <div class="col-2">
            <!-- <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="cep" placeholder="cep" name="cep">
                    <label for="cep">CEP</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <!-- <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" placeholder="email" name="email">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="col-6">
                <!-- <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="telefone" placeholder="telefone" name="telefone">
                    <label for="telefone">Telefone</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <!-- <label for="data_situacao">Data Situação:</label>
                <input type="text" name="data_situacao" id="data_situacao" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="data_situacao" placeholder="data_situacao" name="data_situacao">
                    <label for="data_situacao">Data Situação</label>
                </div>
            </div>
            <div class="col-3">
                <!-- <label for="ultima_atualizacao">Ultima Atualização:</label>
                <input type="text" name="ultima_atualizacao" id="ultima_atualizacao" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ultima_atualizacao" placeholder="ultima_atualizacao" name="ultima_atualizacao">
                    <label for="ultima_atualizacao">Ultima Atualização</label>
                </div>
            </div>
            <div class="col-3">
                <!-- <label for="status">Status:</label>
                <input type="text" name="status" id="status" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="status" placeholder="status" name="status">
                    <label for="status">Status</label>
                </div>
            </div>
            <div class="col-3">
                <!-- <label for="fantasia">Fantasia:</label>
                <input type="text" name="fantasia" id="fantasia" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fantasia" placeholder="fantasia" name="fantasia">
                    <label for="fantasia">Fantasia</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <!-- <label for="efr">EFR:</label>
                <input type="text" name="efr" id="efr" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="efr" placeholder="efr" name="efr">
                    <label for="efr">EFR</label>
                </div>
            </div>
            <div class="col-4">
                <!-- <label for="motivo_situacao">Motivo Situação:</label>
                <input type="text" name="motivo_situacao" id="motivo_situacao" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="motivo_situacao" placeholder="motivo_situacao" name="motivo_situacao">
                    <label for="motivo_situacao">Motivo Situação</label>
                </div>
            </div>
            <div class="col-4">
                <!-- <label for="situacao_especial">Situacao Especial:</label>
                <input type="text" name="situacao_especial" id="situacao_especial" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="situacao_especial" placeholder="situacao_especial" name="situacao_especial">
                    <label for="situacao_especial">Situacao Especial</label>
                </div>
            </div>
            <div class="col-4">
                <!-- <label for="data_situacao_especial">Data Situação Especial:</label>
                <input type="text" name="data_situacao_especial" id="data_situacao_especial" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="data_situacao_especial" placeholder="data_situacao_especial" name="data_situacao_especial">
                    <label for="data_situacao_especial">Data Situação Especial</label>
                </div>
            </div>
            <div class="col-4">
                <!-- <label for="capital_social">Capital Social:</label>
                <input type="text" name="capital_social" id="capital_social" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="capital_social" placeholder="capital_social" name="capital_social">
                    <label for="capital_social">Capital Social</label>
                </div>
            </div>
            <div class="col-4">
                <!-- <label for="extra">Extra:</label>
                <input type="text" name="extra" id="extra" class="form-control"> -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="extra" placeholder="extra" name="extra">
                    <label for="extra">Extra</label>
                </div>
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
    </div>
    
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
        crossorigin="anonymous">
    </script>
    <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="/script.js"></script>
</body>
</html>