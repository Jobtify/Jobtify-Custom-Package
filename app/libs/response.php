<?php
namespace App\Lib;

class Response{
	public $response   = false;
	public $code     = null;
	public $message    = 'Ocurrio un error inesperado.';
	public $errors     = [];
	public $data 	   = [];

	
	public function SetResponse($response, $m = '', $data= array(), $code=200)
	{
		$this->response = $response;
		$this->message = $m;
		$this->data = $data;
		$this->code = $code;

		if(!$response && $m = '') $this->response = 'Ocurrio un error inesperado';
		return $this;
	}
}