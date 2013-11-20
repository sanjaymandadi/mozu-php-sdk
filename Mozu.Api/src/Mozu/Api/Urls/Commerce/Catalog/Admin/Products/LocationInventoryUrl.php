<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class LocationInventoryUrl  {

	/**
		* Get Resource Url for GetLocationInventories
		* @param string $filter 
		* @param int $pageSize 
		* @param string $productCode 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getLocationInventoriesUrl($filter, $pageSize, $productCode, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/products/{ProductCode}/LocationInventory/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "productCode", $productCode);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetLocationInventory
		* @param string $locationCode 
		* @param string $productCode 
		* @return string Resource Url
	*/
	public static function getLocationInventoryUrl($locationCode, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{ProductCode}/LocationInventory/{LocationCode}";
		$url = MozuUrl::formatUrl($url, "locationCode", $locationCode);
		$url = MozuUrl::formatUrl($url, "productCode", $productCode);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddLocationInventory
		* @param string $productCode 
		* @return string Resource Url
	*/
	public static function addLocationInventoryUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{ProductCode}/LocationInventory";
		$url = MozuUrl::formatUrl($url, "productCode", $productCode);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateLocationInventory
		* @param string $productCode 
		* @return string Resource Url
	*/
	public static function updateLocationInventoryUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{ProductCode}/LocationInventory";
		$url = MozuUrl::formatUrl($url, "productCode", $productCode);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteLocationInventory
		* @param string $locationCode 
		* @param string $productCode 
		* @return string Resource Url
	*/
	public static function deleteLocationInventoryUrl($locationCode, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{ProductCode}/LocationInventory/{LocationCode}";
		$url = MozuUrl::formatUrl($url, "locationCode", $locationCode);
		$url = MozuUrl::formatUrl($url, "productCode", $productCode);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

