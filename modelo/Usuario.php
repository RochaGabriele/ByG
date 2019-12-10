<?php
    class Usuario{
    	private $id;
        private $user;
        private $pasw;
        
        public function getPasw(){
            return $this->pasw;
        }
        public function setPasw($s){
            $this->pasw = $s;
        }
        
        
        
        public function getUser(){
            return $this->user;
        }
        public function setUser($u){
            $this->user = $u;
        }
        
        
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }
    }
?>  
