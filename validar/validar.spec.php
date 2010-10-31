<?php
namespace PhpDescribe\Spec;
include("validar.php");
use validar;

describe('VALIDAR CAMPOS', function() {
	
	it('Verifica se o número do telefone é numérico', function(){
		$validar = new Validar();
		expect( $validar->telefone('33445566') )->should( 'be', true );
	});
	
	it('Verifica se o telefone tem oito números', function(){
		$validar = new Validar();
		expect( $validar->telefoneTamanho('33445566') )->should( 'be', 8 );
	});
	
});



