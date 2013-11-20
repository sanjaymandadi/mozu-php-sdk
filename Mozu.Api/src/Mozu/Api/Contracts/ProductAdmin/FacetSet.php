<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	The list of category, price, and attribute facets defined or available for definition for the category.
*/
class FacetSet
{
	/**
	*The list of subcategories and attributes that have not been defined as facets for the category.
	*/
	public $available;
	public function getAvailable() {
		return $this->available;
	}
	
	public function setAvailable($available) {
		$this->available = $available;
		return $this;
	}

	/**
	*The list of category, price, and attribute facets defined for the category.
	*/
	public $configured;
	public function getConfigured() {
		return $this->configured;
	}
	
	public function setConfigured($configured) {
		$this->configured = $configured;
		return $this;
	}

}

?>