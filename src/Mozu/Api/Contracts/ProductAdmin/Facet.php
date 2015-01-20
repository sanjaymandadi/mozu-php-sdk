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
*	Properties of the category, price, or attribute facet shoppers use to filter product display results on a storefront.
*/
class Facet
{
	/**
	*Unique identifier for the storefront container used to organize products.
	*/
	public $categoryId;

	/**
	*Unique identifier of the facet.
	*/
	public $facetId;

	/**
	*The type of facet. Valid values are "range," which enables creation of a range of values, or "value," which populates the facet values based on the associated attribute or category.
	*/
	public $facetType;

	/**
	*If true, disables a facet inherited from a parent category.
	*/
	public $isHidden;

	/**
	*The numeric sequence of the facet for its associated category.
	*/
	public $order;

	/**
	*Overrides a facet inherited from a parent category for a specified subcategory. System-supplied and read only.
	*/
	public $overrideFacetId;

		public $valueSortType;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*For range type facets, an array of ranges to use for the facet values. For example, a price facet might have range queries for $0-$25, $25-$50, and $50-$100.
	*/
	public $rangeQueries;

	/**
	*Container for the facet source information, which includes the category, price, or attribute properties.
	*/
	public $source;

	/**
	*System-supplied and read only parameter that validates a facet for its associated category.
	*/
	public $validity;

}

?>
