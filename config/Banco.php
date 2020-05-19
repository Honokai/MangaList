<?php 

class BancoDados
{
    private $usuario = "root";  private $senha = "865358";
    public $conexao;

    public function Conexao(){
        
        try{
            $this->conexao = new PDO('mysql:host=127.0.0.1;dbname=manga',$this->usuario, $this->senha);
            
            return $this->conexao;

        }catch(PDOException $e){

            echo $e->getMessage();

        }
        
    }

    /**
     * Função para realizar o registro de um usuario
     */
    public function Registrar(String $nome, String $email, String $senha){
        try{
            $bd = new BancoDados;
            $con = $bd->Conexao();
            $query = "INSERT INTO usuarios (email,senha,nome) VALUES ('" . $email . "','" . $senha ."','".strtolower($nome)."')";
            $resultado = $con->prepare($query);
            $resultado->execute();
            return header("Location: .././?y=1");
        } catch (PDOException $erro) {
            echo $erro;
        }
        
    }
    /**
     * Metodo de verificar usuario
     * @param String $usuario
     * @author Emerson
     * @return String
     */
    public function verificaUsuario(String $usuario){
        $bd = new BancoDados;
        $con = $bd->Conexao();
        $query = "SELECT * FROM usuarios where nome = '{$usuario}'";
        $resultado = $con->prepare($query);
        if($resultado->execute()){
            $row = $resultado->rowCount();
            if($row == 1){
                return http_response_code(200);
            }else{
                http_response_code(301);
                return json_encode("Usuário não encontrado");
            }
        }

    }

    public function login(String $nome, String $senha){
        $bd = new BancoDados;
        $con = $bd->Conexao();
        $query = "SELECT * FROM usuarios where nome='{$nome}' and senha ='{$senha}'";
        $resultado = $con->prepare($query);
        $resultado->execute();
        $dado = $resultado->fetchAll();
        $resposta = $resultado->rowCount();
        if($resposta == 1){
            session_start();
            $_SESSION['id'] = $dado[0]['id'];
            $_SESSION['usuario'] = $nome;
            return header("Location:../");
        }
    }

}



?>