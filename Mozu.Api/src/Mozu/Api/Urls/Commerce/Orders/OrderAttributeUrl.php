<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class OrderAttributeUrl  {

	/**
		* Get Resource Url for GetOrderAttributes
		* @param string $orderId Identifier of the order whose order attributes are being retrieved.
		* @return string Resource Url
	*/
	public static function getOrderAttributesUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/attributes";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for CreateOrderAttributes
		* @param string $orderId Identifier of the order whose attributes are being created.
		* @return string Resource Url
	*/
	public static function createOrderAttributesUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/attributes";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateOrderAttributes
		* @param string $orderId Identifier of the order whose order attributes are being updated.
		* @param bool $removeMissing If true, the operation removes missing properties so that the updated order attributes will not show properties with a null value.
		* @return string Resource Url
	*/
	public static function updateOrderAttributesUrl($orderId, $removeMissing)
	{
		$url = "/api/commerce/orders/{orderId}/attributes?removeMissing={removeMissing}";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "removeMissing", $removeMissing);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>
