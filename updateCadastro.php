<?php
require_once("controller/controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VekSystem</title>
    <link rel="shortcut icon" type="imagex/png" href="img/bootstrap-logo.svg">
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
                        <a class="navbar-brand" href="index.php">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web - MySQL
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
                        <a class="navbar-brand" href="#">Editar - Cadastros</a>
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
                
                    <?php
                        $controller = new controller();
                        $resultado = $controller->listar($_GET['id']);
                    ?>

                    <form method="post" action="controller/controller.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" class="row g-3" >
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputEmail4" class="form-label">Primeiro Nome*</label>
                            <input autofocus type="text" placeholder="ex: Alex" class="form-control" name="txtNome" required id="txtNome" value="<?php echo $resultado[0]['nome']; ?>">
                        </div>
                    
                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email*</label>
                            <input type="email" class="form-control" placeholder="example@every.com" name="txtEmail" required id="txtEmail" value="<?php echo $resultado[0]['email']; ?>">
                        </div>

                        <div style="text-align: left;" class="col-md-6">
                            <label for="inputSenha4" class="form-label">Senha*</label> <div style="display:inline-block; float:right;"><label for="inputSenha4" class="form-label test">Exibir senha</label>  <input name="checkbox" id="checkbox" style="margin:0 12px 0 0; vertical-align: middle; position: relative; top: -1px;" class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input"></div>
                            <input type="password" minlength="6" maxlength="14" placeholder="De 6 a 14 digitos" class="form-control" name="txtSenha" required id="txtSenha" value="<?php echo $resultado[0]['senha']; ?>">
                        </div>
                            <!-- Aqui iremos utilizar JS para exibir senha ou não -->
                            <script>
                                const selecionado = document.querySelector("#checkbox");
                                var tipo = document.getElementById("txtSenha");

                                selecionado.addEventListener("change", (el) => {
                                if (selecionado.checked) {
                                    tipo.type = "text";
                                }else{
                                    tipo.type = "password";
                                }
                                });

                                selecionado.dispatchEvent(new Event("change"));
                            </script>
                        
                        <div class="col-md-6" style="text-align: left;">
                            <label for="inputAddress" class="form-label">CEP*</label>
                            <input type="text" class="form-control" placeholder="ex: 01234-567" name="txtCep" required id="txtCep" value="<?php echo $resultado[0]['cep']; ?>">
                        </div>

                        <div class="col-md-6" style="text-align: left;">
                            <label for="inputAddress2" class="form-label">Endereço</label>
                            <input type="text" placeholder="Preenchimento automático" readonly class="form-control" name="txtEndereco" required id="txtEndereco" value="<?php echo $resultado[0]['endereco']; ?>">
                        </div>

                        <div class="col-md-6" style="text-align: left;">
                            <label for="inputCity" class="form-label">Cidade</label>
                            <input type="text" placeholder="Preenchimento automático" readonly class="form-control" name="txtCidade" required id="txtCidade" value="<?php echo $resultado[0]['cidade']; ?>">
                        </div>

                        <div class="col-md-4" style="text-align: left;">
                            <label for="inputState" class="form-label">Bairro</label>
                            <input type="text" placeholder="Preenchimento automático" readonly class="form-control" name="txtBairro" required id="txtBairro" value="<?php echo $resultado[0]['bairro']; ?>">
                        </div>

                        <div class="col-md-2" style="text-align: left;">
                            <label for="inputZip" class="form-label">Estado</label>
                            <input type="text" placeholder="Preenchimento automático" readonly class="form-control" name="txtEstado" required id="txtEstado" value="<?php echo $resultado[0]['estado']; ?>">
                        </div>

                        <p style="text-align: left; font-weight: bold">Os campos marcados com * são obrigatórios, os demais são de preenchimento automático</p>

                        <div class="col-12" style="text-align: left;">
                            <button type="submit" id="btnUpdate" class="btn btn-primary">Editar</button>
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
                                    $("#txtEstado").val(dadosRetorno.uf);
                                }catch(ex){}
                            });
                        });
                    </script>
                    <!-- FIM DO AUTOCOMPLETE -->
            </div>
        </div>   

        

    </div>    
</body>
</html>