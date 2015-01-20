<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\PackageUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Packages subresource to manage the physical packages to ship for an order.
*/
class PackageClient {

	/**
	* Retrieves a list of the actions available to perform for a package associated with order fulfillment.
	*
	* @param string $orderId Unique identifier of the order associated with the package fulfillment.
	* @param string $packageId Unique identifier of the package associated with the fulfillment actions to retrieve.
	* @return MozuClient
	*/
	public static function getAvailablePackageFulfillmentActionsClient($orderId, $packageId)
	{
		$url = PackageUrl::getAvailablePackageFulfillmentActionsUrl($orderId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the package label image supplied by the carrier.
	*
	* @param string $orderId Unique identifier of the order associated with the package label to retrieve.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @return MozuClient
	*/
	public static function getPackageLabelClient($orderId, $packageId)
	{
		$url = PackageUrl::getPackageLabelUrl($orderId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a package of order items.
	*
	* @param string $orderId Unique identifier of the order associated with the package to retrieve.
	* @param string $packageId Unique identifier of the package to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getPackageClient($orderId, $packageId, $responseFields =  null)
	{
		$url = PackageUrl::getPackageUrl($orderId, $packageId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new physical package of order items.
	*
	* @param string $orderId Unique identifier of the order associated with this package.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Package $package Properties of the physical package of order items.
	* @return MozuClient
	*/
	public static function createPackageClient($pkg, $orderId, $responseFields =  null)
	{
		$url = PackageUrl::createPackageUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a physical package of order items.
	*
	* @param string $orderId Unique identifier of the order associated with the package to update.
	* @param string $packageId Unique identifier of the package of order items to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Package $package Wrapper of properties for the package of order items to update.
	* @return MozuClient
	*/
	public static function updatePackageClient($pkg, $orderId, $packageId, $responseFields =  null)
	{
		$url = PackageUrl::updatePackageUrl($orderId, $packageId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);
		return $mozuClient;

	}
	
	/**
	* Removes a physical package of items from the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the package to delete.
	* @param string $packageId Unique identifier of the package to delete.
	*/
	public static function deletePackageClient($orderId, $packageId)
	{
		$url = PackageUrl::deletePackageUrl($orderId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

