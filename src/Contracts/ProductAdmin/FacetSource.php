<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Describes the source of the facet data. It can be a product field (such as price and category) or a product attribute. 			All fields are System-supplied and read only.		
*/
class FacetSource
{
	/**
	*If true, the facet allows for values that consist of one or more ranges, such as 0-100, 100-200, and 200-300. This is only allowed for numeric and date fields. 
	*/
	public $allowsRangeQuery;

	/**
	*The data type of the source product property, typically of type Bool, DateTime, Number, or String.
	*/
	public $dataType;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*The source type for the facet, either "Attribute" or "Element".  Elements are direct properties of the product and include category and price.
	*/
	public $type;

}

?>
