<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingRuntime;



/**
*	Properties of a custom attribute used to integrate with a shipping provider, which consists of an array of necessary key-value pairs.
*/
class CustomAttribute
{
	/**
	*Key used for metadata defined for objects, including extensible attributes, custom attributes associated with a shipping provider, and search synonyms definitions. This content may be user-defined depending on the object and usage.
	*/
	public $key;

	/**
	*The value of a property, used by numerous objects within Mozu including facets, attributes, products, localized content, metadata, capabilities (Mozu and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

	/**
	*Collection of child attributes associated with a shipping provider integration.
	*/
	public $childAttributes;

}

?>
