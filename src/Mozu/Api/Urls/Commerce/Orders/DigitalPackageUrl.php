<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DigitalPackageUrl  {

	/**
		* Get Resource Url for GetAvailableDigitalPackageFulfillmentActions
		* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
		* @param string $orderId This parameter provides the unique identifier of the order on which to get a list of available actions.
		* @return string Resource Url
	*/
	public static function getAvailableDigitalPackageFulfillmentActionsUrl($digitalPackageId, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/digitalpackages/{digitalPackageId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("digitalPackageId", $digitalPackageId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetDigitalPackage
		* @param string $digitalPackageId This parameter provides the digital package Id.
		* @param string $orderId This parameter provides the unique identifier of the order with which to associate the digital package.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getDigitalPackageUrl($digitalPackageId, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/digitalpackages/{digitalPackageId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("digitalPackageId", $digitalPackageId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateDigitalPackage
		* @param string $orderId The orderID is a required paramter for the digitalpackages operation. The orderId is a unique identifier of the order with which to associate the digital package.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createDigitalPackageUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/digitalpackages?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDigitalPackage
		* @param string $digitalPackageId This parameter specifies the digital package to update in the order.
		* @param string $orderId This parameter provides the unique identifier of the order with which to associate the digital package.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateDigitalPackageUrl($digitalPackageId, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/digitalpackages/{digitalPackageId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("digitalPackageId", $digitalPackageId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDigitalPackage
		* @param string $digitalPackageId The digitalPackage ID is unique package ID to update on the order.
		* @param string $orderId The orderId is unique identifier of the order with which to associate the package.
		* @return string Resource Url
	*/
	public static function deleteDigitalPackageUrl($digitalPackageId, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/digitalpackages/{digitalPackageId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("digitalPackageId", $digitalPackageId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
}

?>

