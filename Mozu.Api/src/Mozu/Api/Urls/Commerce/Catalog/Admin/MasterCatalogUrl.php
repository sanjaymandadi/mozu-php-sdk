<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class MasterCatalogUrl  {

	/**
		* Get Resource Url for GetMasterCatalogs
		* @return string Resource Url
	*/
	public static function getMasterCatalogsUrl()
	{
		$url = "/api/commerce/catalog/admin/mastercatalogs/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetMasterCatalog
		* @param int $masterCatalogId 
		* @return string Resource Url
	*/
	public static function getMasterCatalogUrl($masterCatalogId)
	{
		$url = "/api/commerce/catalog/admin/mastercatalogs/{masterCatalogId}";
		$url = MozuUrl::formatUrl($url, "masterCatalogId", $masterCatalogId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for UpdateMasterCatalog
		* @param int $masterCatalogId 
		* @return string Resource Url
	*/
	public static function updateMasterCatalogUrl($masterCatalogId)
	{
		$url = "/api/commerce/catalog/admin/mastercatalogs/{masterCatalogId}";
		$url = MozuUrl::formatUrl($url, "masterCatalogId", $masterCatalogId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>
