<!-- MÉTODOS CONSTRUTORES -passam informações para os atributos assim que a classe é instanciada. Quando se cria um objeto automaticamente, os atributos já recebem as informações -->
<?php 
 class Carro{
    private $ligado, $vAtual, $vMax, $msg;

    public function __construct(){
        
    }

    public function setLigado($l){
        $this->ligado = $l;
    }
    public function setvAtual($va){
        $this->vAtual = $va;
    }
    public function setvMax($vm){
        $this->vMax = $vm;
    }
    public function setmsg($m){
        $this->msg = $m;
 }

    public function getLigado(){
        return $this->ligado;
    }
    public function getvAtual(){
        return $this->vAtual;
    }
    public function getvMax(){
        return $this->vMax;
    }
    public function getmsg(){
        return $this->msg;
    }
}
 
 ?>