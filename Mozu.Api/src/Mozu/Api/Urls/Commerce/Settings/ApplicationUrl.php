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

class ApplicationUrl  {

	/**
		* Get Resource Url for ThirdPartyGetApplication
		* @return string Resource Url
	*/
	public static function thirdPartyGetApplicationUrl()
	{
		$url = "/api/commerce/settings/applications/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for ThirdPartyUpdateApplication
		* @return string Resource Url
	*/
	public static function thirdPartyUpdateApplicationUrl()
	{
		$url = "/api/commerce/settings/applications/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>
