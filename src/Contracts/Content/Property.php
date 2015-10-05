<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	Provides details and data for properties for content in the site.
*/
class Property
{
	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*If true, the attribute can have more than one value.
	*/
	public $isMultiValued;

	/**
	*Indicates if the property, attribute, product option, or product extra is required. If true, the object must have a defined value.
	*/
	public $isRequired;

	/**
	*The type of a property. These types are associated to properties for documents and document types.
	*/
	public $propertyType;

}

?>
