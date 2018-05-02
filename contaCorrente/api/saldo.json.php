<?php
    include 'conexao-banco.php';
    header("Content-Type: application/json; charset=UTF-8");
    $err = "";
    $saldo = 0;

    try {
        // conecta ao banco
        $conn = getConexaoBanco();

        // prepara o SQL para execucao
        $stmt = $conn->prepare("SELECT saldo FROM `conta-corrente` WHERE numero = '12345-6'");
        // executa a consulta
        $stmt->execute();
        // configura para acessar os valores de cada coluna pelo nome
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // busca todos os resultados do banco
        $result = $stmt->fetchAll();

        // acessa a primeira linha (indice 0) e le o valor da coluna saldo
        $saldo = $result[0]["saldo"];

    } catch (PDOException $e) {
        $err = $e->getMessage();
    } finally {
        // $conn->close();
    }

?>
{
    "saldo": <?php echo $saldo; ?>,
    "erro": <?php echo $err ? "true" : "false" ?>,
    "erro_msg": "<?php echo $err ? htmlspecialchars(json_encode($err)) : ""; ?>"
}