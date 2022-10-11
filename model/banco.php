<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','cadastro');
    
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCadastros($nome,$email,$senha,$endereco,$bairro,$cep,$cidade,$estado){
        $stmt = $this->mysqli->prepare("INSERT INTO logins (`nome`,`email`, `senha`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES (?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssssssss",$nome,$email,$senha,$endereco,$bairro,$cep,$cidade,$estado);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCadastros($id){
        try {
            if(isset($id) && $id > 0){
                $stmt = $this->mysqli->query("SELECT * FROM logins WHERE id = '" . $id . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM logins;");
            }
            
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['nome'] = $l['nome'];
                $f_lista[$i]['email'] = $l['email'];
                $f_lista[$i]['senha'] = $l['senha'];
                $f_lista[$i]['endereco'] = $l['endereco'];
                $f_lista[$i]['bairro'] = $l['bairro'];
                $f_lista[$i]['cep'] = $l['cep'];
                $f_lista[$i]['cidade'] = $l['cidade'];
                $f_lista[$i]['estado'] = $l['estado'];
                $i++;
            }
            return $f_lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar buscar Todos." . $e;
        }
    }

    public function updateCadastros($id,$nome,$email,$senha,$endereco,$bairro,$cep,$cidade,$estado){
        $stmt = $this->mysqli->query("UPDATE  logins  SET `nome` = '" . $nome . "', `email` = '" . $email . "', `senha` = '" . $senha . "', `endereco` = '" . $endereco . "', `bairro` = '" . $bairro . "',`cep` = '" . $cep . "',`cidade` = '" . $cidade . "',`estado` = '" . $estado . "' WHERE `logins`.`id` = " . $id . ";");
        if( $stmt > 0){
            return true;
        }else{
            return false;
        }
    }

    public function deleteCadastros($id){
        $stmt = $this->mysqli->query("DELETE FROM logins WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }

}    
?>
