<?php

class Company extends Eloquent{

	protected $table = 'company';

	public function city(){
    	 return $this->belongsTo('Cities');
    }

}