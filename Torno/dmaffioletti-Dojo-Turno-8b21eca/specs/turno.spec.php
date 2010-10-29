<?php 
namespace PhpDescribe\Spec;
include('Turno.php');
use Turno;


describe('Turno', function() {
  describe('Usa o PhpDescribe', function() {
    addSpec(__DIR__ . '/../PhpDescribe/specs/PhpDescribe.spec.php');
  });

  describe('regras', function() {
    it('Um turno sem movimento deve concluir com o mesmo tanto de pontos que começou.', function() {
      $turno = new Turno();
      $turno->novoTurno();
      $quantidadeInicial = Turno::QUANTIDADE_INICIAL;
      $movimentosRestantes = $turno->getUnidadesDeMovimentoRestantes();
      expect($movimentosRestantes)->should('be',$quantidadeInicial);
    });
  });

  describe('movimentar', function(){
    describe('Para uma pessoa que tem 10 UMs', function(){
        it('Inicia com 10 UMs', function(){
          $turno = new Turno();
          $pontuacaoInicial = $turno->getUnidadesDeMovimentoRestantes();
          expect($pontuacaoInicial)->should('be', 10);
        });
        it('Deve ficar com 5 UMs ao andar 5 passos', function(){
          $turno = new Turno();
          $turno->andar(5);
          $movimentosRestantes = $turno->getUnidadesDeMovimentoRestantes();
          expect($movimentosRestantes)->should('be', 5);
        });
        it('Deve dar erro ao dar passos acima da quantidade de movimentos restantes', function(){
          expectException('Exception');
          $turno = new Turno();
          $turno->andar(7);
          $turno->andar(5);
          $movimentosRestantes = $turno->getUnidadesDeMovimentoRestantes();
        });

      });
  });

 describe('atirar', function(){

    describe('Tiro rápido', function(){

        it('Deve subtrair 3 UMs do total', function(){
           $turno = new Turno();
           $turno->tiroRapido();
           $numRestantes = $turno->getUnidadesDeMovimentoRestantes();
           expect( $numRestantes )->should('be',7);
        });

        it( 'ao tentar atirar, se nao houver ao menos 3 UMs lanca exception', function(){
          expectException('Exception');
          $turno = new Turno();
          $turno->tiroRapido()
                ->tiroRapido()
                ->tiroRapido()
                ->tiroRapido();
        });
    });

    describe('Tiro mirado', function(){
        it('ao tentar atirar, se nao houver ao menos 7 UMs lanca exception', function(){
          expectException('Exception');
           $turno = new Turno();
           $turno->tiroMirado()
                 ->tiroMirado();
        });

        it('Deve subtrair 7 UMs ao total',function(){
           $turno = new Turno();
           $turno->tiroMirado();
           $numRestantes = $turno->getUnidadesDeMovimentoRestantes();
           expect( $numRestantes )->should('be',3);
        });

    });      
 });

 describe('Agachar',function(){
     it('Deve subtrair 2 UMs quando agachar', function(){
        $turno = new Turno();
        $turno->agachar();
        $numRestantes = $turno->getUnidadesDeMovimentoRestantes();
        expect( $numRestantes )->should('be', 8);
     });

     it('ao tentar agachar, se nao houver ao menos 2 UMS lanca exception', function() {
       expectException('Exception');
       $turno = new Turno;
       $turno->agachar()
             ->agachar()
             ->agachar()
             ->agachar()
             ->agachar()
             ->agachar();
     });
  });
});
