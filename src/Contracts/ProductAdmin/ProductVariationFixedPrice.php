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
*	Mozu.ProductAdmin.Contracts.ProductVariationFixedPrice ApiType DOCUMENT_HERE 
*/
class ProductVariationFixedPrice
{
	/**
	*The credit value of the product or bundled product. When the `goodsType `is `DigitalCredit`, this value is populated to indicate the value of the credit. This is used to create store credit in the fulfillment of gift cards.
	*/
	public $creditValue;

	/**
	*The localized currency code for the monetary amount. 
	*/
	public $currencyCode;

	/**
	*Variation price for fixed pricing
	*/
	public $listPrice;

	/**
	*The manufacturer's suggested retail price for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*The set sale price for a product consisting of a price with a discount already applied.
	*/
	public $salePrice;

}

?>
