<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin\Search;



/**
*	Mozu.ProductAdmin.Contracts.Search.SearchTuningRule ApiType DOCUMENT_HERE 
*/
class SearchTuningRule
{
	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule active ApiTypeMember DOCUMENT_HERE 
	*/
	public $active;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule activeEndDate ApiTypeMember DOCUMENT_HERE 
	*/
	public $activeEndDate;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule activeStartDate ApiTypeMember DOCUMENT_HERE 
	*/
	public $activeStartDate;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule blockedProductCodes ApiTypeMember DOCUMENT_HERE 
	*/
	public $blockedProductCodes;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule boostedProductCodes ApiTypeMember DOCUMENT_HERE 
	*/
	public $boostedProductCodes;

	/**
	*Indicates if the object is default. This indicator is used for product variations and site search settings. If true, the value/object is the default option. 
	*/
	public $isDefault;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule keywords ApiTypeMember DOCUMENT_HERE 
	*/
	public $keywords;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule searchTuningRuleCode ApiTypeMember DOCUMENT_HERE 
	*/
	public $searchTuningRuleCode;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule searchTuningRuleDescription ApiTypeMember DOCUMENT_HERE 
	*/
	public $searchTuningRuleDescription;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule searchTuningRuleName ApiTypeMember DOCUMENT_HERE 
	*/
	public $searchTuningRuleName;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Basic audit info about the object, including date, time, and user account. Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Mozu.ProductAdmin.Contracts.Search.SearchTuningRule filters ApiTypeMember DOCUMENT_HERE 
	*/
	public $filters;

}

?>
