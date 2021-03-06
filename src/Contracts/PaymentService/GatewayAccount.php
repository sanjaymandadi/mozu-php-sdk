<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PaymentService;



/**
*	Account information for the payment gateway.
*/
class GatewayAccount
{
	/**
	*The 2-letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	*/
	public $countryCode;

	/**
	*Identifier of the payment gateway.
	*/
	public $gatewayDefinitionId;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Indicates if the object or feature is active. This indicator is used for subscriptions (at the site or tenant level), customer accounts, products and variations.
	*/
	public $isActive;

	/**
	*List of credential fields for the payment gateway account.
	*/
	public $credentialFields;

}

?>
