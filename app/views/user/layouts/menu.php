<?php
require_once "layouts/header.php"
?>
    <body>
    <header class="cabeçario">
        <!-- MENU RESPONSIVO -->
            <div class="Icone_Menu">
                <input type="checkbox" id="check">
                    <label for="check">
                        <i class="fa-solid fa-bars" id="icone"></i>
                    </label>
                    <nav class="opções">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                            <li><a href="https://sisfiesportal.mec.gov.br/">Fies</a></li>
                            <li><a href="https://acessounico.mec.gov.br/prouni">Prouni</a></li>
                            <li><a href="pesquisar.php">Pesquisar</a></li>
                         </ul>
                    </nav>
            </div>
        </div>
        <!-- MENU TOTAL -->
        <div class="container">
            <div class="logo"> 
                <img src="../assets/style/user/img/guia_jovem_home.png">
            </div>
            <div class="Menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="https://www.gov.br/inep/pt-br/areas-de-atuacao/avaliacao-e-exames-educacionais/enem"> Enem </a></li>
                        <li><a href="https://sisfiesportal.mec.gov.br/">Fies</a></li>
                        <li><a href="https://acessounico.mec.gov.br/prouni">Prouni</a></li>  
                        <li style="padding-top: 15px; padding-left:10px;"><a  href="pesquisar.php">Pesquisar</a></li> 
                      </ul>
                </nav>
            </div> 
            <div class="Login">
                <div class="DropDown">
                    <button><a href="controllers/edit.php">
                <?php
                    @session_start();
                    $idPerfil = $_SESSION['Perfil']['ID_perfil'];
                    require_once("../../models/database/conexao.php");
                    $dbConnection = new Conexao();
                    $db = $dbConnection->conexao();
                    $sql = "SELECT * FROM usuarios_comuns WHERE ID_perfil = :ID_perfil";
                    $stmt = $db->prepare($sql);
                    $stmt->bindParam(':ID_perfil',$idPerfil);
                    if($stmt->execute()){
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            $usuario = $row['usuario'];
                        }
                    }
                    $Conexão = new Conexao();
                    $Banco = $Conexão->conexao();
                    $comando = "SELECT foto_usuario FROM usuarios_comuns WHERE usuario = :usuario";
                    $função = $Banco->prepare($comando);
                    $função->bindParam(':usuario',$usuario);
                    if($função->execute()){
                        $row = $função->fetch(PDO::FETCH_ASSOC);
                        if ($row) {
                            if ($row['foto_usuario'] == null) {
                                echo "<img src='../assets/style/user/img/nula.png'>";
                            } else {
                                $caminho = 'controllers/';
                                echo "<img src=".$caminho.$row['foto_usuario'].">";
                            } 
                    
                        } else {
                            echo "<img src='../assets/style/user/img/nula.png'>";
                        }
                    }
                        ?>
                        </a></button>
                        <div class="DropDown_Menu"> 
                            <a class="Informações"><?php echo  $_SESSION['Perfil']['nome'];?></a>
                            <a class="Informações"><form method="POST" action="controllers/logout.php"><input type="submit" value="Logout"></form></a>
                        </div>            
                </div>
            </div>
        </div>
    </header>
</html>