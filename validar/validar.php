<?php
class Validar{

	public function telefone( $numero ){
		if( is_numeric( $numero ) ){
			return true;
		} else {
			return false;
		}
	}
	
	public function telefoneTamanho( $numero ){
		return strlen( $numero );
	}
	
	public function dataTamanho( $data ){
		return strlen( $data );
	}
	
	public function dataValida( $data ){
		$arrData = explode('/', $data );
		return checkdate( $arrData[1], $arrData[0], $arrData[2] );
	}
}
