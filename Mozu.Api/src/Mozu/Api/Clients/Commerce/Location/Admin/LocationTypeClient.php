<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Location\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Location\Admin\LocationTypeUrl;
use Mozu\Api\DataViewMode;

/**
* 
*/
class LocationTypeClient {

	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getLocationTypesClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationTypeUrl::getLocationTypesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	* @return MozuClient
	*/
	public static function getLocationTypeClient( $locationTypeCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationTypeUrl::getLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param LocationType $locationType 
	* @return MozuClient
	*/
	public static function addLocationTypeClient($locationType, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationTypeUrl::addLocationTypeUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationType);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	* @param LocationType $locationType 
	* @return MozuClient
	*/
	public static function updateLocationTypeClient($locationType,  $locationTypeCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationTypeUrl::updateLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationType);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	*/
	public static function deleteLocationTypeClient( $locationTypeCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationTypeUrl::deleteLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
