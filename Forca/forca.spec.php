<?php 
namespace PhpDescribe\Spec;
include('forca.php');
use forca;

describe('Forca', function() {
  describe('PhpDescribe', function() {
    addSpec(__DIR__ . '/PhpDescribe/specs/PhpDescribe.spec.php');
  });
  
  describe('Inicia o jogo', function() {
    
    it('Identificar quantas letras tem a palavra', function(){
      $forca = new Forca();
      $numLetter = $forca->getTagNumLetter();
      expect( $forca->getTagNumLetter() )->should( 'be', $numLetter );
    });
    
    it('Verifica se existe alguma letra na palavra selecionada, se não encontrar remove uma vida', function(){
      $forca = new Forca();
      $letter = $forca->tagSearchLetter('a');
      expect( $letter )->should( 'be', true );
    });
    
  });
  
});