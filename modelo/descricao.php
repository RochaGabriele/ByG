<?php
    class descricao{
        private $id;
        private $legenda;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }
        
        public function getLegenda(){
            return $this->legenda;
        }
        
        public function setLegenda($nt){
            $this->legenda = $nt;
        }         
    }
?>  
