<?php
    class divSeis{
        private $id;
        private $textoSeis;
        private $email;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }
        public function getTextoSeis(){
            return $this->textoSeis;
        }
        
        public function setTextoSeis($n){
            $this->textoSeis = $n;
        }
        
       public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email = $e; 
        }
       
    }
?>  
