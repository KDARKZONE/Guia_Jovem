<?php
@session_start();
require_once("../models/login.php");

class Sessao extends Login {
    public function verificarNivelAcesso() {
        $this->RealizarLogin();

        if (isset($_SESSION['Perfil']) && isset($_SESSION['Perfil']['nivel_acesso'])) {
            $nivelAcesso = $_SESSION['Perfil']['nivel_acesso'];

            if ($nivelAcesso === 'usuario comum') {
                $_SESSION['Usuario'] = true;
                $_SESSION['administrador'] = null;
                $_SESSION['autor'] = null;
                header("Location:../views/layouts/user/index.php");        
                
            } elseif ($nivelAcesso === 'autor') {
                $_SESSION['autor'] = true;
                $_SESSION['usuario comum'] = null;
                $_SESSION['administrador'] = null;
                header("Location: ../views/layouts/autor/index.php");
            } elseif ($nivelAcesso === 'administrador') {
                $_SESSION['administrador'] = true;
                $_SESSION['usuario comum'] = null;
                $_SESSION['autor'] = null;
               header("Location:../views/layouts/adm/index.php");   
            }
        } else {
            return null;

        }
    }
}

$mostrar = new Sessao();
$mostrar->verificarNivelAcesso();
?>