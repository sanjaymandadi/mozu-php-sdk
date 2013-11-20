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

class ProductReservationUrl  {

	/**
		* Get Resource Url for GetProductReservations
		* @param string $filter "A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - ""filter=IsDisplayed+eq+true"""
		* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getProductReservationsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/productreservations/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetProductReservation
		* @param int $productReservationId Unique identifier of the product reservation.
		* @return string Resource Url
	*/
	public static function getProductReservationUrl($productReservationId)
	{
		$url = "/api/commerce/catalog/admin/productreservations/{productReservationId}";
		$url = MozuUrl::formatUrl($url, "productReservationId", $productReservationId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddProductReservation
		* @return string Resource Url
	*/
	public static function addProductReservationUrl()
	{
		$url = "/api/commerce/catalog/admin/productreservations/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for CommitReservation
		* @param int $productReservationId Unique identifier of the reservation.
		* @param int $qty Number of product items to remove from inventory.
		* @return string Resource Url
	*/
	public static function commitReservationUrl($productReservationId, $qty)
	{
		$url = "/api/commerce/catalog/admin/productreservations/{productReservationId}/commit/{qty}";
		$url = MozuUrl::formatUrl($url, "productReservationId", $productReservationId);
		$url = MozuUrl::formatUrl($url, "qty", $qty);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateProductReservation
		* @param int $productReservationId Unique identifier of the product reservation to update. 
		* @return string Resource Url
	*/
	public static function updateProductReservationUrl($productReservationId)
	{
		$url = "/api/commerce/catalog/admin/productreservations/{productReservationId}";
		$url = MozuUrl::formatUrl($url, "productReservationId", $productReservationId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteProductReservation
		* @param int $productReservationId Unique identifier of the reservation.
		* @return string Resource Url
	*/
	public static function deleteProductReservationUrl($productReservationId)
	{
		$url = "/api/commerce/catalog/admin/productreservations/{productReservationId}";
		$url = MozuUrl::formatUrl($url, "productReservationId", $productReservationId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>
