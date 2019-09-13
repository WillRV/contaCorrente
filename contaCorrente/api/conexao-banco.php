<?php 
    // retorna a conexao com o banco de dados
    //testeIgnoraEsseComentario
    function getConexaoBanco() {
        $servername = "localhost";
        $username = "username";
        $password = "password";
        
        $base = "banco";

        $conn = NULL;

        try {    
            $conn = new PDO("mysql:host=$servername;dbname=$base", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {            
            throw $e;
        }
        
        return $conn;
    }
 ?>