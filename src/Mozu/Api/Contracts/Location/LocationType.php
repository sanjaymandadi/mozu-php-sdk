<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Location;



/**
*	Properties of a type of physical location, such as warehouse or kiosk. Location types enable tenants to group similar locations for filtering and location usage type definition.
*/
class LocationType
{
	/**
	*User-defined identifying code for the location type.
	*/
	public $code;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

		public $auditInfo;

}

?>
