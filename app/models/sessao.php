<?php
session_start();
require_once("../models/login.php");

class Sessao extends Login {
    public function verificarNivelAcesso() {
        $this->RealizarLogin();

        if (isset($_SESSION['Perfil']) && isset($_SESSION['Perfil']['Nivel de Acesso'])) {
            $nivelAcesso = $_SESSION['Perfil']['Nivel de Acesso'];

            if ($nivelAcesso === 'usuario comum') {
                $_SESSION['Usuario'] = true;
                $_SESSION['administrador'] = null;
                $_SESSION['autor'] = null;
                echo '<script>alert("Usuário comum");
                window.location.href="../views/logout.php";</script>';
                
            } elseif ($nivelAcesso === 'autor') {
                $_SESSION['autor'] = true;
                $_SESSION['usuario comum'] = null;
                $_SESSION['administrador'] = null;
                echo '<script>alert("Autor")</script>';
            } elseif ($nivelAcesso === 'administrador') {
                $_SESSION['administrador'] = true;
                $_SESSION['usuario comum'] = null;
                $_SESSION['autor'] = null;
                echo '<script>alert("Administrador")</script>';
            }
        } else {
            return null;
            // echo '<script>alert("Nível de acesso não encontrado")</script>';
        }
    }
}

$mostrar = new Sessao();
$mostrar->verificarNivelAcesso();
?>