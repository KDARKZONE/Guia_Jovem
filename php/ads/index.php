<?php
    @$Nome_da_Empresa = $_POST['nome'];
    @$CNPJ = $_POST['cnpj'];
    @$Email = $_POST['email'];
    @$Endereco = $_POST['endereço'];
    @$Senha = $_POST['senha'];

    function NotNullInstituição($Nome_da_Empresa){
        if(isset($Nome_da_Empresa) && !empty($Nome_da_Empresa)){
            return $Nome_da_Empresa;
        }
        else{
            return "GUIA JOVEM< INFORMA: NENHUM NOME FOI INFORMADO NO CAMPO";
        }
    }
    function NotNullCNPJ($CNPJ){
        if(isset($CNPJ) && !empty($CNPJ)){
            return $CNPJ;
        }
        else{
            return "GUIA JOVEM. INFORMA: NENHUM CNPJ DE EMPRESA FOI INFORMADO";
        }
    }
    function NotNullEmail($Email){
        if(isset($Email) && !empty($Email)){
            return $Email;
        }
        else{
            return "GUAI JOVEM. INFORMA: NENHUM EMAIL EMPRESARIAL FOI INFORMADO";
        }
    }
    function NotNullLocalização($Localização){
        if(isset($Localização) && !empty($Localização)){
            return $Localização;
        }
        else{
            return "GUIA JOVEM> INFORMA: NENHUMA LOCALIZAÇÂO FOI INFORMADA";
        }
    }
    function NotNullSenha($Senha){
        if(isset($Senha) && !empty($Senha)){
            return $Senha;
        }
        else{
            return "GUIA JOVEM> INFORMA: NENHUMA SENHA FOI INFORMADA";
        }
    }
    require_once("Classe_Anuncio.php");
    $Anunciante = new Anunciante($Nome_da_Empresa,$CNPJ,$Localização,$Email,$Senha);
    $NOME = $Anunciante->__set_instituição(NotNullInstituição($Nome_da_Empresa));
    $CNPJ = $Anunciante->__set_cnpj(NotNullCNPJ($CNPJ));
    $ENDERECO = $Anunciante->__set_Localização(NotNullLocalização($Endereco));
    $EMAIL = $Anunciante->__set_Email(NotNullEmail($Email));
    $SENHA = $Anunciante->__set_Senha(NotNullSenha($Senha));
    require_once("Banco_de_Dados_Anunciante.php");
   
?>