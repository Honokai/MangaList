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

}



?>