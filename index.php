<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web 2.0</title>
    <link rel="shortcut icon" type="imagex/png" href="img/ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">Cadastro</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="consulta.php">Consulta</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Cadastro de Usuários</a>
                    </div>
                    </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row g-3">
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputSenha4" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="inputSenha4">
                    </div>
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputEndereco4" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="inputEndereco4">
                    </div>
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputBairro4" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="inputBairro4">
                    </div>
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputCep4" class="form-label">Cep</label>
                        <input type="text" class="form-control" id="inputCep4">
                    </div>
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputCidade4" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade4">
                    </div>
                    <div style="text-align: left;" class="col-md-6">
                        <label for="inputState" class="form-label">Estado</label>
                        <select class="form-select" id="inputState">
                            <option selected>Escolha</option>
                            <option value="">AC</option>
                            <option value="">AL</option>
                            <option value="">AP</option>
                            <option value="">AM</option>
                            <option value="">BA</option>
                            <option value="">CE</option>
                            <option value="">DF</option>
                            <option value="">ES</option>
                            <option value="">GO</option>
                            <option value="">MA</option>
                            <option value="">MT</option>
                            <option value="">MS</option>
                            <option value="">MG</option>
                            <option value="">PA</option>
                            <option value="">PB</option>
                            <option value="">PR</option>
                            <option value="">PE</option>
                            <option value="">PI</option>
                            <option value="">RJ</option>
                            <option value="">RN</option>
                            <option value="">RS</option>
                            <option value="">RO</option>
                            <option value="">RR</option>
                            <option value="">SC</option>
                            <option value="">SP</option>
                            <option value="">SE</option>
                            <option value="">TO</option>
                        </select>
                    </div>
                    <div style="text-align: left;" class="col-12">
                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>    

    </div>    
</body>
</html>