<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\InStockNotificationSubscriptionUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class InStockNotificationSubscriptionClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getInStockNotificationSubscriptionsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$url = InStockNotificationSubscriptionUrl::getInStockNotificationSubscriptionsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $id 
	* @return MozuClient
	*/
	public static function getInStockNotificationSubscriptionClient($id)
	{
		$url = InStockNotificationSubscriptionUrl::getInStockNotificationSubscriptionUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param InStockNotificationSubscription $inStockNotificationSubscription 
	* @return MozuClient
	*/
	public static function addInStockNotificationSubscriptionClient($inStockNotificationSubscription)
	{
		$url = InStockNotificationSubscriptionUrl::addInStockNotificationSubscriptionUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($inStockNotificationSubscription);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $id 
	*/
	public static function deleteInStockNotificationSubscriptionClient($id)
	{
		$url = InStockNotificationSubscriptionUrl::deleteInStockNotificationSubscriptionUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
