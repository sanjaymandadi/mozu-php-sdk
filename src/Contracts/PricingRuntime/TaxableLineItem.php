<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PricingRuntime;



/**
*	Properties of a line item in an order that is subject to tax.
*/
class TaxableLineItem
{
	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Indicates if the item is subject to taxation, used by products, options, extras, cart and order items, line items, and wish lists. If true, the entity is subject to tax based on the relevant tax rate and rules.
	*/
	public $isTaxable;

	/**
	*The sale price of the line item in the order.
	*/
	public $lineItemPrice;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

	/**
	*The reason description for an action, including item return, coupon not valid, and item is taxed. 
	*/
	public $reason;

	/**
	*The calculated monetary amount of shipping for a line items within and an entire order.
	*/
	public $shippingAmount;

	/**
	*For configurable products, the unique identifier of the product variation that has been selected.
	*/
	public $variantProductCode;

	/**
	*Properties of the product that represents the line item in the order.
	*/
	public $productProperties;

}

?>
