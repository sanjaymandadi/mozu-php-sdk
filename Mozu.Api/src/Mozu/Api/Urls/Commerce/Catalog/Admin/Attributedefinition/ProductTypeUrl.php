<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductTypeUrl  {

	/**
		* Get Resource Url for GetProductTypes
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product type search results by any of its properties. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=Name+cont+shoes"</b>
		* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getProductTypesUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetProductType
		* @param int $productTypeId Identifier of the product type being retrieved.
		* @return string Resource Url
	*/
	public static function getProductTypeUrl($productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}";
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddProductType
		* @return string Resource Url
	*/
	public static function addProductTypeUrl()
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateProductType
		* @param int $productTypeId Identifier of the product type to update.
		* @return string Resource Url
	*/
	public static function updateProductTypeUrl($productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}";
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteProductType
		* @param int $productTypeId Identifier of the product type being deleted.
		* @return string Resource Url
	*/
	public static function deleteProductTypeUrl($productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}";
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>
