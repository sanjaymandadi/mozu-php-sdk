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
*	The actual vocabulary value of the attribute that exists as a part of the product type.
*/
class AttributeVocabularyValueInProductType
{
	/**
	*Sequence of the attribute value within the product type.
	*/
	public $order;
	public function getOrder() {
		return $this->order;
	}
	
	public function setOrder($order) {
		$this->order = $order;
		return $this;
	}

	/**
	*The vocabulary value of an attribute defined for a product type.
	*/
	public $value;
	public function getValue() {
		return $this->value;
	}
	
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}

	/**
	*Navigates vocabulary value details for an attribute defined for a product type.
	*/
	public $vocabularyValueDetail;
	public function getVocabularyValueDetail() {
		return $this->vocabularyValueDetail;
	}
	
	public function setVocabularyValueDetail($vocabularyValueDetail) {
		$this->vocabularyValueDetail = $vocabularyValueDetail;
		return $this;
	}

}

?>