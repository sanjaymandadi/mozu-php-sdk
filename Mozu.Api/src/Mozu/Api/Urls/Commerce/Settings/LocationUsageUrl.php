<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class LocationUsageUrl  {

	/**
		* Get Resource Url for GetLocationUsages
		* @return string Resource Url
	*/
	public static function getLocationUsagesUrl()
	{
		$url = "/api/commerce/settings/locationUsages/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetLocationUsage
		* @param string $code 
		* @return string Resource Url
	*/
	public static function getLocationUsageUrl($code)
	{
		$url = "/api/commerce/settings/locationUsages/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for UpdateLocationUsage
		* @param string $code 
		* @return string Resource Url
	*/
	public static function updateLocationUsageUrl($code)
	{
		$url = "/api/commerce/settings/locationUsages/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>
