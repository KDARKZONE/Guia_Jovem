<?php 
    Class Anunciante{
        Private $nome;
        Private $cnpj;
        Private $endereco;
        Private $email;
        Private $senha;

        Public function __construct($NOME,$CNPJ,$ENDERECO,$EMAIL,$SENHA){
            $this->nome = $NOME;
            $this->cnpj = $CNPJ;
            $this->endereco = $ENDERECO;
            $this->email = $EMAIL;
            $this->senha = $SENHA;
        }
        public function __set_instituição($VALUE){
            $EMPRESAS = null;
            $Cri = null;
            if(preg_match('/[A-Z]/',$VALUE) && preg_match('/[a-z]/',$VALUE)){
                $EMPRESAS = $this->nome = $VALUE;
                $Cri = base64_encode($EMPRESAS);
                return $Cri;
            }
            else
            if (preg_match('/[A-Z]/',$VALUE) && preg_match('/[a-z]/',$VALUE) && preg_match('/[0-9]/',$VALUE)){
                $EMPRESAS = $this->nome = $VALUE;
                $Cri = base64_encode($EMPRESAS);
                return $Cri;
            }
            else{
                return "ERROR";
            }
        }
        public function __get_instituição(){
            return $this->nome;
        }
        public function __set_cnpj($VALUE){
            $CNPJS = null;
            $Cri = null;
            if(preg_match('/[0-9]/',$VALUE) && preg_match('/[{\/}]/',$VALUE) && preg_match('/[.]/',$VALUE)){
                $CNPJS = $this->cnpj = $VALUE;
                $Cri = base64_encode($CNPJS);
                return $Cri;
            }
            else{
                return "ERROR";
            }
        }
        public function __get_cnpj(){
            return $this->cnpj;
        }
        public function __set_Localização($VALUE){
            $ENDERECOS = null;
            $Cri = null;
            if(preg_match('/[A-Z]/',$VALUE) && preg_match('/[a-z]/',$VALUE) && preg_match('/[0-9]/',$VALUE)){
                $ENDERECOS = $this->endereco = $VALUE;
                $Cri = base64_encode($ENDERECOS);
                return $Cri;
            }
            else
            if(preg_match('/[a-z]/',$VALUE) && preg_match('/[0-9]/',$VALUE)){
                $ENDERECOS= $this->endereco = $VALUE;
                $Cri = base64_encode($ENDERECOS);
                return $Cri;
            }
            else
            if(preg_match('/[A-Z]/',$VALUE) && preg_match('/[0-9]/',$VALUE)){
                $ENDERECOS = $this->endereco = $VALUE;
                $Cri = base64_encode($ENDERECOS);
                return $Cri;
            }
            else{
                return "ERROR";
            }
        }
        public function __get_Localização(){
            return $this->endereco;
        }
        public function __set_Email($VALUE){
            $EMAILS = null;
            $Cri = null;
            if(filter_var($VALUE,FILTER_VALIDATE_EMAIL)){
               $EMAILS = $this->email = $VALUE;
               $Cri = base64_encode($EMAILS);
               return $Cri;
            }
            else{
                return "ERROR";
            }
        }
        public function __get_Email(){
            return $this->email;
        }
        public function __set_Senha($VALUE){
            $SENHA = null;
            $Cri = null;
            if(preg_match('/[A-Z]/',$VALUE && preg_match('/[a-z]/',$VALUE) && preg_match('/[0-9]/',$VALUE))){
                $SENHA = $this->senha = $VALUE;
                $Cri = base64_encode($SENHA);
                return $Cri;
            }
            else{
                return "ERROR";
            }
        }
        public function __get_Senha(){
            return $this->senha;
        }

    }


?>