<?php
    class padrao{
        private $id;
        private $textPadrao;
        private $emailPadrao;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }
        public function getTextPadrao(){
            return $this->textPadrao;
        }
       
        public function setTextPadrao($n){
            $this->textPadrao = $n;
        }
        public function getEmailPadrao(){
            return $this->emailPadrao;
        }
        public function setEmailPadrao($e){
            $this->emailPadrao= $e; 
        }
        
    }
?>  
