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
*	Properties of a shipping rate calculated for a line item in a shipment.
*/
class ShippingItemRate
{
	/**
	*The calculated shipping amount for an item in a shipment.
	*/
	public $amount;

	/**
	*Unique identifier of an item used to calculate or request a shipping rate.
	*/
	public $itemId;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

}

?>
