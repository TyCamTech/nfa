<?php
namespace Admin\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class Option extends Eloquent {
	public function product(){
		return $this->belongs_to('Product');
	}
}