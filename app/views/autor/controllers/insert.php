<?php
session_start();
if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $conteudo = $_POST['conteudo'];
        $DataHora = date('Y-m-d H:i:s');
        $Pasta = 'IMG-autor/';/** Criando uma variavel que guarde o Caminho que a Pasta onde a Imagem será guardada **/
        $Nome_Imagem = $_FILES['imagem']['name'];/** Pegando o Nome do Arquivo  */
        $New_Nome_Imagem = uniqid($Nome_Imagem);/** Adicionando um Novo Nome ao Nome do Arquivo */
        $Extensao = strtolower(pathinfo($Nome_Imagem,PATHINFO_EXTENSION)); /** strtolower e usado para transformar as letras de MAISCULAS para todas minusculas, no caso da imagem estar em JPG ou PNG, mas a função pathinfo('',PATHINFO_EXTENSION) para buscar a extensão da Imagem (PNG ou JPG) */
        /** Criando uma Excessão */
        if($Extensao != 'jpg' && $Extensao != 'png' && $Extensao != 'JPEG'){
            die("<script>alert('Tipo de Arquivo não aceito Verifique se a Extenção esta em png ou jpg');
            window.location.href='../index.php';</script>");
        }
        /** Caso exista erros */
        if($_FILES['imagem']['error'] >= 1){
            die("<scrip>alert('Error ao Tentar enviar um arquivo certifique-se que o arquivo é realmente uma imagem');
            window.location.href='index.php';</script>");
        }
        $New_Pasta = $Pasta.$New_Nome_Imagem.".".$Extensao; 
        $imagem = move_uploaded_file($_FILES['imagem']['tmp_name'],$New_Pasta);
        require_once("../../../models/database/conexao.php");
        $dbConnection = new Conexao();
        $db = $dbConnection->conexao();
        $sql_SELECT = "SELECT cpf FROM autores WHERE ID_perfil = :ID_perfil";
        $stmt_SELECT = $db->prepare($sql_SELECT);
        $stmt_SELECT->bindParam(':ID_perfil',$_SESSION['Perfil']['ID_perfil']);
        $stmt_SELECT->execute();
        $result = $stmt_SELECT->fetch(PDO::FETCH_ASSOC);
        $cpf = $result['cpf'];
        $sql_INSERT = "INSERT INTO post (data_hora_post,titulo,categoria,conteudo,thumb,cpf,ID_perfil) VALUES (:data_hora_post,:titulo, :categoria, :conteudo, :thumb,:cpf,:ID_perfil)";
        $stmt_INSERT = $db->prepare($sql_INSERT);
        $stmt_INSERT->bindParam(':data_hora_post',$DataHora);
        $stmt_INSERT->bindParam(':titulo',$titulo);
        $stmt_INSERT->bindParam(':categoria',$categoria);
        $stmt_INSERT->bindParam(':conteudo',$conteudo);
        $stmt_INSERT->bindParam(':thumb',$New_Pasta);
        $stmt_INSERT->bindParam(':ID_perfil',$_SESSION['Perfil']['ID_perfil']);
        $stmt_INSERT->bindParam(':cpf',$cpf);
        if($stmt_INSERT->execute()){
            $imagemURL = "../app/views/autor/controllers/".$New_Pasta;
            echo "<script>alert('O seu artigo foi publicado com sucesso');
            window.location.href = '../index.php';</script>";

        }
        else{
            echo "<script>alert('Desculpe houve um Error ao Publicar Tente Novamente')</script>";
        }
    }
}
// $Pasta = 'imagens-do-Anuncio-Noticias/';/** Criando uma variavel que guarde o Caminho que a Pasta onde a Imagem será guardada **/
// $Nome_Imagem = $_FILES['imagem']['name'];/** Pegando o Nome do Arquivo  */
// $New_Nome_Imagem = uniqid($Nome_Imagem);/** Adicionando um Novo Nome ao Nome do Arquivo */
// $Extensao = strtolower(pathinfo($Nome_Imagem,PATHINFO_EXTENSION)); /** strtolower e usado para transformar as letras de MAISCULAS para todas minusculas, no caso da imagem estar em JPG ou PNG, mas a função pathinfo('',PATHINFO_EXTENSION) para buscar a extensão da Imagem (PNG ou JPG) */
// /** Criando uma Excessão */
// if($Extensao != 'jpg' && $Extensao != 'png'){
//     die("<script>alert('Tipo de Arquivo não aceito Verifique se a Extenção esta em png ou jpg')</script>");
// }
// $New_Pasta = $Pasta.$New_Nome_Imagem.".".$Extensao; 
// $imagem = move_uploaded_file($_FILES['imagem']['tmp_name'],$New_Pasta);
// if($imagem){
//     require_once("../../../models/database/conexao.php");
//     $dbConnection = new Conexao();
//     $db = $dbConnection->conexao();
//     $sql = "INSERT INTO post (imagem,caminho_imagem) VALUES (:imagem,:caminho_imagem)";
//     $stmt = $db->prepare($sql);
//     $stmt->BindParam(':imagem',$Nome_Imagem);
//     $stmt->BindParam(':caminho_imagem',$New_Pasta);
//     if($stmt->execute()){
//         echo "A imagem foi enviada";
//         echo "<br>";
//         echo "<a href='aba.php'> Clique Aqui </a>";
//     }
// }
?>