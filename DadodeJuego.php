<?php

    class dadoRol{
        private $minNumDado;
        private $maxNumDado;
    
        public function getminNumDado(){
            return $this->minNumDado;
        }

        public function setminNumDado($numeroMinimo){
                $this->minNumDado=$numeroMinimo;
            if($numeroMinimo<0){
                echo "Número mínimo no válido\r\n"; 
            }
            }
        

        public function getmaxNumDado(){
            return $this->maxNumDado;
        }
        public function setmaxNumDado($numeroMaximo){
                $this->maxNumDado=$numeroMaximo;
            if($numeroMaximo>12){
                echo "Número máximo no válido\r\n";
                }  
            }

    public function tirarDado(){
        
    return rand($this->minNumDado, $this->maxNumDado);

    }
}

?>