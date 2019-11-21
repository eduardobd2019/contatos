<?php
/**
 * Classe de conexao com o banco de dados
 */
class Conexao{
    // Nome do usuario do servidor de banco de dados
    private $user = 'id9069320_bd2019';
    // Senha do banco de dados
    private $password = '2019bd2019';
    // Nome do banco de dados para se conectar
    private $database = 'id9069320_bd2019';
    // Host do servidor de banco de dados
    private $host = 'localhost';    // 000webhost //usar localhost //mysql.hostinger.com.br
    // Obejto de conexao PDO
    public $con;  
    /**
     * Cria a conexao quando a classe e instanciada, 
     caso ocorra erro e retornado o erro
     */
    public function __construct(){
        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database.'',$this->user, 
            $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
            return $this->conn;
        }catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
?>
