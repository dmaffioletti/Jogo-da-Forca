<?php


class Turno {

    private $qtdUm;
    const QUANTIDADE_INICIAL = 10;

    public function __construct() {
      $this->novoTurno();
    }

    public function novoTurno() {
      $this->qtdUm = self::QUANTIDADE_INICIAL;
    }
    
    public function getUnidadesDeMovimentoRestantes() {
      return $this->qtdUm;
    }

    public function andar($passos) {
      if ($passos > $this->qtdUm){
        throw new Exception('Passo maior que UMs');
      }
      $this->qtdUm -= $passos;
      return $this->qtdUm;
    }

    public function tiroRapido(){
      if( ($this->qtdUm - 3) < 0 ){
              throw new Exception( 'olha a faca!' );
      }
      $this->qtdUm -= 3;
      return $this;
    }

     public function tiroMirado(){
      if( ($this->qtdUm - 7) < 0 ){
              throw new Exception( 'olha a faca!' );
      }
      $this->qtdUm -= 7;
      return $this;
    }

    public function agachar(){
      if( ($this->qtdUm - 2) < 0 ){
              throw new Exception( 'olha a faca!' );
      }
      $this->qtdUm -= 2;
      return $this;
    }
}
