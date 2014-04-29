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
*	Properties of an order for which to calculate tax. When a tax capability is enabled for a tenant, Mozu sends the TaxableOrder properties to the capability as read-only, system-supplied information.
*/
class TaxableOrder
{
	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Handling fee associated with the order.
	*/
	public $handlingFee;

	/**
	*The date and time the order was submitted.
	*/
	public $orderDate;

		public $originalDocumentCode;

		public $originalOrderDate;

	/**
	*The total shipping amount calculated for the order.
	*/
	public $shippingAmount;

		public $taxRequestType;

	/**
	*The line items associated with the order.
	*/
	public $lineItems;

	/**
	*The tax properties associated with the order.
	*/
	public $taxContext;

}

?>