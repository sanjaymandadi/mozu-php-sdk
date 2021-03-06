<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingAdmin\Profile;



/**
*	Mozu.ShippingAdmin.Contracts.Profile.HandlingFeeRule ApiType DOCUMENT_HERE 
*/
class HandlingFeeRule
{
	/**
	*The level at which this fee applies shippingrate order
	*/
	public $appliesTo;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*the product target rule codes associated with this rule leave empty or null to denote all products
	*/
	public $productTargetRuleCodes;

	/**
	*The numeric order of objects, used by a vocabulary value defined for an extensible attribute, images, and categories.
	*/
	public $sequence;

	/**
	*The shipping target rule codes associated with this rule leave empty or null to denote all destinations
	*/
	public $shippingTargetRuleCodes;

	/**
	*The value of a property, used by numerous objects within Mozu including facets, attributes, products, localized content, metadata, capabilities (Mozu and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

	/**
	*An attribute value type is either predefined vocabulary by the admin during attribute set up or user-defined with an appropriate type (AdminEntered or ShopperEntered depending on the user). These types are used by products and attributes. The difference between predefined values versus manually entered values is such that the first choice is a set of options to choose from. AdminEntered and ShopperEntered are values that are entered rather than system-supplied and are not stored in the database, but captured during a live commerce operations such as during an order.
	*/
	public $valueType;

	/**
	*Basic audit info about the object, including date, time, and user account. Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*the servicetypes associated with this rule leave empty or null to denote all carriers and subsequent service types
	*/
	public $serviceTypes;

}

?>
