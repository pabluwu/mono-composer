<?php

namespace mono;

class Listing extends MonoModel {

	protected $model = 'listing';

	public function viewFromList($id) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$_params = ['model'=>$this->model, 'id'=>$id];
		$url = 'listing/'.$id.'/contactos';
		return $this->master->call($url, $_params, 'get');
	}

	public function getByName($name) {
		if (!$this->model) throw new \Exception('You must enter a model');;
		$new = str_replace(' ', '%20', $name);
		$_params = ['model'=>$this->model, 'name'=>$new];
		$url = $this->model.'/search/'.$new;
		return $this->master->call($url, $_params, 'get');
	}
}