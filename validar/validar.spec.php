<?php
namespace PhpDescribe\Spec;
include("validar.php");
use validar;

describe('VALIDAR CAMPOS', function() {

	describe('NÚMERO', function(){
	
		it('Verifica se o número do telefone é numérico', function(){
			$validar = new Validar();
			expect( $validar->telefone('33445566') )->should( 'be', true );
		});
	
		it('Verifica se o telefone tem oito números', function(){
			$validar = new Validar();
			expect( $validar->telefoneTamanho(33445566) )->should( 'be', 8 );
		});
		
	});
	
	describe('DATA', function(){
		
		it('Verifica se a data tem dez caracteres', function(){
			$validar = new Validar();
			expect( $validar->dataTamanho('10/11/2010') )->should( 'be', 10 );
		});
		
		it('Verifica se a data está correta', function(){
			$validar = new Validar();
			expect( $validar->dataValida('15/10/2010') )->should( 'be', true );
		});
		
	});
	
});



