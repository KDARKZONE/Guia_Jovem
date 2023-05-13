<?php
    /** Criando a Classe  */
    class CADASTRO{
        protected $Nome; /** Atributo Nome da Classe Dado Como Protegido  */
        protected $Email; /** Atributo Email da Classe Dado Como Protegido  */
        protected $Senha; /** Atributo Senha da Classe Dado como Protegido  */

        public function __construct($NOME,$EMAIL,$SENHA){
            $this->Nome = $NOME;
            $this->Email = $EMAIL;
            $this->Senha = $SENHA;
        }
        /** Criando uma função publica com o Metodo Magico __set()  */
        public function __setNome($VALUE){ /** Pegando o Parametro $NOME e Criando um Parametro Value */
            if(preg_match('/[A-Z]/',$VALUE) && preg_match('/[a-z]/',$VALUE)){ /** o Parametro Value ta sendo usado para checar se o Parametro Value e uma string */
                return  $this->Nome = $VALUE; /** retornando o Parametro NOME igual a VALUE para checar se o NOME inserido e uma string */
            }
            else
            {
                return "ERROR";
            }
        }
        /** Criando uma função publica com o Metodo Magico __get() */
        public function __getNome(){ 
            return $this->Nome;/** Retornando ao Nome */
        }
        /** Criando uma Função Publica com o Metodo Magico __set() */
        public function __setEmail($VALUE){
            if(filter_var($VALUE, FILTER_VALIDATE_EMAIL)){/** Atraves do filter_var, FILTER_VALIDATE_EMAIL validamos se o VALUE e um email */
                return $this->Email = $VALUE; /** retornando ao Paramentro EMAIL */
                
            }
            else{
                return "ERROR";
            }
        }
        public function __getEmail(){
            return $this->Email;
        }

        public function setSenha($VALUE){
            if(preg_match('/[A-Z]/',$VALUE)&& preg_match('/[a-z]/',$VALUE)&& preg_match('/[1 - 9]/',$VALUE)){
                return base64_encode( $this->Senha = $VALUE);
            }
            else{
                return "ERROR";
            }
        }
        public function getSenha(){
            return $this->Senha;
        }
    }
?>