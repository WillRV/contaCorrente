<?php
    include 'conexao-banco.php';
    header("Content-Type: application/json; charset=UTF-8");
    $err = "";
    $saldo = 0;

    try {
        $conn = getConexaoBanco();

        // $result = $conn->query("SELECT -1 as saldo");

        // if ($result->num_rows > 0) {
        //     $row = $result->fetch_assoc();
        //     $saldo = $row["saldo"];
        // }
    } catch (PDOException $e) {
        $err = $e->getMessage();
    }
?>
{
    "saldo": <?php echo $saldo; ?>,
    "erro": <?php echo $err ? "true" : "false" ?>,
    "erro_msg": "<?php echo $err ? htmlspecialchars(json_encode($err)) : ""; ?>"
}