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
}
