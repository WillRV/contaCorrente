<?php 
    // retorna a conexao com o banco de dados
    function getConexaoBanco() {
        $servername = "localhost";
        $username = "username";
        $password = "password";

        $conn = NULL;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {            
            throw $e;
        }
        
        return $conn;
    }
 ?>