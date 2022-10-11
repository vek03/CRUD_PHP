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
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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
            <form method="post" action="controller/controller.php?funcao=cadastro" id="form" name="form" >
                <div class="row g-3">
                    
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" placeholder="example@gmail.com" class="form-control" name="txtEmail" required id="txtEmail">
                        </div>
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputSenha4" class="form-label">Senha</label>
                            <input type="password" minlength="6" maxlength="14" placeholder="De 6 a 14 digitos" class="form-control" name="txtSenha" required id="txtSenha">
                        </div>
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputEndereco4" class="form-label">Endereço</label>
                            <input type="text" placeholder="Insira o CEP" readonly class="form-control" name="txtEndereco" required id="txtEndereco">
                        </div>
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputBairro4" class="form-label">Bairro</label>
                            <input type="text" placeholder="Insira o CEP" readonly class="form-control" name="txtBairro" required id="txtBairro">
                        </div>
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputCep4" class="form-label">Cep</label>
                            <input type="text" maxlength="9" class="form-control" name="txtCep" required id="txtCep" placeholder="13483-000" autofocus>
                        </div>
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputCidade4" class="form-label">Cidade</label>
                            <input type="text" placeholder="Insira o CEP" readonly class="form-control" name="txtCidade" required id="txtCidade">
                        </div>
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputState" class="form-label">Estado</label>
                            <select class="form-select" name="cboEstado" required id="cboEstado">
                                <option selected>Escolha</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option>SP</option>
                                <option >SE</option>
                                <option>TO</option>
                            </select>
                        </div>
                        <div style="text-align: left;" class="col-12">
                            <button type="submit" id="btnCadastrar" class="btn btn-dark">Cadastrar</button>
                        </div>
                    </form>

                    <!-- AQUI DEFINIMOS COMO AUTOCOMPLETE O ENDEREÇO A PARTIR DO CEP -->
                    <script>
			/*
			 * Para efeito de demonstração, o JavaScript foi
			 * incorporado no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			
			// Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
			// quando o usuário sair do campo "cep"
			$("#txtCep").blur(function(){
				// Remove tudo o que não é número para fazer a pesquisa
				var cep = this.value.replace(/[^0-9]/, "");
				
				// Validação do CEP; caso o CEP não possua 8 números, então cancela
				// a consulta
				if(cep.length != 8){
					return false;
				}
				
				// A url de pesquisa consiste no endereço do webservice + o cep que
				// o usuário informou + o tipo de retorno desejado (entre "json",
				// "jsonp", "xml", "piped" ou "querty")
				var url = "https://viacep.com.br/ws/"+cep+"/json/";
				
				// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
				// caso ocorra algum erro (o cep pode não existir, por exemplo) a
				// usabilidade não seja afetada, assim o usuário pode continuar//
				// preenchendo os campos normalmente
				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#txtEndereco").val(dadosRetorno.logradouro);
						$("#txtBairro").val(dadosRetorno.bairro);
						$("#txtCidade").val(dadosRetorno.localidade);
					}catch(ex){}
				});
			});
		</script>
        <!-- FIM DO AUTOCOMPLETE -->

                </div>
            </div>
        </div>    

    </div>    
</body>
</html>