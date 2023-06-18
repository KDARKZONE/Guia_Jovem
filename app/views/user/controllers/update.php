<?php
session_start();
if (!isset($_SESSION['Perfil'])) {
    echo "Você precisa estar logado para acessar esta página.";
    exit;
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores enviados pelo formulário
    $novoNome = $_POST['Nome'];
    $novoEmail = $_POST['Email'];
    $perfilId = $_POST['Id'];
    // Atualize as informações do usuário no banco de dados
    try {
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql = "UPDATE Perfis SET nome = :nome, email = :email WHERE ID_perfil = :ID_perfil";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':ID_perfil', $perfilId);
        $stmt->bindParam(':nome', $novoNome);
        $stmt->bindParam(':email', $novoEmail);
        $stmt->execute();
        // Verifique se a atualização foi bem-sucedida
        if ($stmt->rowCount() > 0) {
            // Atualização bem-sucedida
           session_destroy();
           die('<script>alert("Os Dados Foram Atualizados");
           window.location.href="../index.php";</script>');
        } else {
            // Falha na atualização
            echo "Falha ao atualizar as informações. Tente novamente.";
        }
    }catch (PDOException $e) {
        echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    }
} else {
    echo "O formulário não foi enviado corretamente.";
}
?>