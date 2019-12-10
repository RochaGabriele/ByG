<?php
    class logoPadrao{
        private $id;
        private $nameUm;
        private $tipoUm;
        private $binUm;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }
        public function getNameUm(){
            return $this->nameUm;
        }
        
        public function setNameUm($n){
            $this->nameUm = $n;
        }
        public function getTipoUm(){
            return $this->tipUm;
        }
        
        public function setTipoUm($t){
            $this->tipoUm = $t;
        }
        public function getBinUm(){
            return $this->binUm;
        }
        
        public function setBinUm($b){
            $this->binUm = $b;
        }
       
    }
?>  
