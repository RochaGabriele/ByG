<?php
    class posts{
        private $id;
        private $postagem;
        private $subtext;
        private $namePost;
        private $tipoPost;
        private $binPost;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }
        
        public function getPostagem(){
            return $this->postagem;
        }
        
        public function setPostagem($p){
            $this->postagem = $p;
        }    
        public function getSubtext(){
            return $this->subtext;
        }
        
        public function setSubtext($s){
            $this->subtext = $s;
        }  
        
        
        public function getNamePost(){
            return $this->namePost;
        }
        public function setNamePost($np){
            $this->namePost = $np; 
        }
        
        
        public function getTipoPost(){
            return $this->tipoPost;
        }
        public function setTipoPost($tp){
            $this->tipoPost = $tp; 
        }
        
        
        public function getBinPost(){
            return $this->binPost;
        }
        public function setBinPost($bp){
            $this->binPost = $bp; 
        }       
    }
?>  
