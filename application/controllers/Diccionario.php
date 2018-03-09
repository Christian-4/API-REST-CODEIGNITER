<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Diccionario extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('diccionario_model');
	}

	public function index_get()
	{
		$palabras = $this->diccionario_model->get();
		$this->response(array('response' => $palabras));
	}

	public function find_get($id)
	{
		$palabra = $this->diccionario_model->get($id);
		$this->response(array('response' => $palabra));
	}

	public function index_post()
	{
		$id = $this->diccionario_model->guardar($this->post('palabra'));
		$this->response(array('response' => $id));
	}

	public function index_put($id)
	{
		$actualizar = $this->diccionario_model->actualizar($id, $this->put('palabra'));
		$this->response(array('response' => $actualizar));
	}

	public function index_delete($id)
	{
		$borrar = $this->diccionario_model->borrar($id);
		$this->response(array('response' => $borrar));
	}
}
