<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingAdmin;



/**
*	Properties of a carrier configured in the shipping admin.
*/
class CarrierConfiguration
{
	/**
	*Indicates whether the credentials/passwords are set. Credetials are updated only if this flag is set to true
	*/
	public $areCredentialsSet;

	/**
	*Indicates if the capability or app is enabled for the tenant/site. If true, the capability/application is enabled for the tenant. System-supplied and read-only.
	*/
	public $enabled;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*A list of custom table rates for the 'Custom' carrier only use this if Id == 'Custom'
	*/
	public $customTableRates;

	/**
	*Wrapper for a group of properties such as a label that includes a value and a locale code, audit information, and a key-value pair.
	*/
	public $settings;

}

?>
