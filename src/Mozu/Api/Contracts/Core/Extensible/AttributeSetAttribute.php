<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\Extensible;



/**
*	Properties for an attribute set attribute.
*/
class AttributeSetAttribute
{
	/**
	*If true, the attribute in the attribute set has multiple values.
	*/
	public $IsMultiValued;
	public function getIsMultiValued() {
		return $this->IsMultiValued;
	}
	
	public function setIsMultiValued($isMultiValued) {
		$this->IsMultiValued = $isMultiValued;
		return $this;
	}

	/**
	*If true, the attribute in the attribute set is read-only and cannot be modified.
	*/
	public $IsReadOnly;
	public function getIsReadOnly() {
		return $this->IsReadOnly;
	}
	
	public function setIsReadOnly($isReadOnly) {
		$this->IsReadOnly = $isReadOnly;
		return $this;
	}

	/**
	*If true, the entity is required for the request to return a valid response.
	*/
	public $IsRequired;
	public function getIsRequired() {
		return $this->IsRequired;
	}
	
	public function setIsRequired($isRequired) {
		$this->IsRequired = $isRequired;
		return $this;
	}

	/**
	*The numeric value that denotes the place this entity occupies in the order of the entity list.
	*/
	public $Sequence;
	public function getSequence() {
		return $this->Sequence;
	}
	
	public function setSequence($sequence) {
		$this->Sequence = $sequence;
		return $this;
	}

	/**
	*Wrapper for the attribute properties to extend.
	*/
	public $Attribute;
	public function getAttribute() {
		return $this->Attribute;
	}
	
	public function setAttribute($attribute) {
		$this->Attribute = $attribute;
		return $this;
	}

}

?>