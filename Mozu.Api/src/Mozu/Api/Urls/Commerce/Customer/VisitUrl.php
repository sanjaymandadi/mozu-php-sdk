<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class VisitUrl  {

	/**
		* Get Resource Url for GetVisits
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getVisitsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/visits/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetVisit
		* @param string $visitId 
		* @return string Resource Url
	*/
	public static function getVisitUrl($visitId)
	{
		$url = "/api/commerce/customer/visits/{visitId}";
		$url = MozuUrl::formatUrl($url, "visitId", $visitId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddVisit
		* @return string Resource Url
	*/
	public static function addVisitUrl()
	{
		$url = "/api/commerce/customer/visits/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateVisit
		* @param string $visitId 
		* @return string Resource Url
	*/
	public static function updateVisitUrl($visitId)
	{
		$url = "/api/commerce/customer/visits/{visitId}";
		$url = MozuUrl::formatUrl($url, "visitId", $visitId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>
