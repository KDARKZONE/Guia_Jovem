<?php
@session_start();
require_once("login.php");

class Sessao extends Login {
    public function verificarNivelAcesso() {
        $this->RealizarLogin();

        if (isset($_SESSION['Perfil']) && isset($_SESSION['Perfil']['nivel_acesso'])) {
            $nivelAcesso = $_SESSION['Perfil']['nivel_acesso'];

            if ($nivelAcesso == 'usuario comum') {
                $_SESSION['usuario comum'] = true;
                $_SESSION['administrador'] = null;
                $_SESSION['autor'] = null;
                header("Location:../views/user/index.php");        
                
            } 
            else
            if ($nivelAcesso == 'autor') {
                $_SESSION['autor'] = true;
                $_SESSION['usuario comum'] = null;
                $_SESSION['administrador'] = null;
                header("Location: ../views/autor/controllers/verificacao_autor.php");
            } 
            else
            if ($nivelAcesso == 'administrador') {
                $_SESSION['administrador'] = true;
                $_SESSION['usuario comum'] = null;
                $_SESSION['autor'] = null;
               header("Location:../views/adm/index.php");   
            }
        } else {
            return null;
        }
    }
}

$mostrar = new Sessao();
$mostrar->verificarNivelAcesso();
?>