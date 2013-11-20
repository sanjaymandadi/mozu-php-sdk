<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Orders;



/**
*	A characteristic of an order.
*/
class OrderAttribute
{
		public $attributeDefinitionId;
	public function getAttributeDefinitionId() {
		return $this->attributeDefinitionId;
	}
	
	public function setAttributeDefinitionId($attributeDefinitionId) {
		$this->attributeDefinitionId = $attributeDefinitionId;
		return $this;
	}

	/**
	*The fully qualified name of the attribute.
	*/
	public $fullyQualifiedName;
	public function getFullyQualifiedName() {
		return $this->fullyQualifiedName;
	}
	
	public function setFullyQualifiedName($fullyQualifiedName) {
		$this->fullyQualifiedName = $fullyQualifiedName;
		return $this;
	}

	/**
	*The values of the order attribute.
	*/
	public $values;
	public function getValues() {
		return $this->values;
	}
	
	public function setValues($values) {
		$this->values = $values;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. System-supplied and read-only.
	*/
	public $auditInfo;
	public function getAuditInfo() {
		return $this->auditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->auditInfo = $auditInfo;
		return $this;
	}

}

?>