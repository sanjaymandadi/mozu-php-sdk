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
*	Properties of the publishing status of the product, including its current state and the details of the last product change published to the catalog.
*/
class ProductPublishingInfo
{
	/**
	*The user ID of the user who last published changes for this product in the catalog.
	*/
	public $lastPublishedBy;

	/**
	*The date and time a draft change for this product was published to the catalog.
	*/
	public $lastPublishedDate;

	/**
	*The current publishing state of this product in the catalog, which is Live, New, or Draft. Live products appear on the storefront and have no pending changes. New products have been created but do not yet appear on the storefront. Draft products appear on the storefront but have pending changes that have not yet been published.
	*/
	public $publishedState;

}

?>