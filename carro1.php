<!-- MÉTODOS CONSTRUTORES -passam informações para os atributos assim que a classe é instanciada. Quando se cria um objeto automaticamente, 
 os atributos já recebem as informações -->
<?php 
 class Carro{
    private $ligado, $vAtual, $vMax, $msg;

    public function __construct($vm){
        $this->setLigado(false);
        $this->setvAtual(0);
        $this->setvMax($vm);
    }
    //métodos setters
    public function setLigado($l){
        $this->ligado = $l;
    }
    public function setvAtual($va){
        $this->vAtual = $va;
    }
    public function setvMax($vm){
        $this->vMax = $vm;
    }
    public function setMsg($m){
        $this->msg = $m;
 }
 //método getters
    public function getLigado(){
        return $this->ligado;
    } 
    public function getvAtual(){
        return $this->vAtual;
    }
    public function getvMax(){
        return $this->vMax;
    }
    public function getMsg(){
        return $this->msg;
    }
    //Métodos específicos
    public function acelerar($vel){
        if($this->getLigado()==true):
            if($this->getvAtual()+ $vel < $this->getvMax()):
                $this->setvAtual($this->getvAtual()+ $vel);

            else:
                $this->setvAtual($this->getvMax());
                $this->setMsg('O carro atingiu a velocidade máxima.');
        endif;
    else:
             $this->setMsg('O carro está desligado.');
        }
    }
}
 
 ?>
