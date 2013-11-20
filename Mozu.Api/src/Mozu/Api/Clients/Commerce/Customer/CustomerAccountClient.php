<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CustomerAccountUrl;

/**
* Create, view, update, and delete a contact in a customer account. A customer account may have multiple contacts for billing or shipping addresses. Each contact may also list any groups to which the contact belongs and whether the contact accepts marketing material such as newsletters or email offers.
*/
class CustomerAccountClient {

	/**
	* Retrieves a list of customer accounts.
	*
	* @param string $fields The fields to include in the response.
	* @param string $filter "A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - ""filter=IsDisplayed+eq+true"""
	* @param int $pageSize 
	* @param string $q 
	* @param int $qLimit 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountsClient($fields =  null, $filter =  null, $pageSize =  null, $q =  null, $qLimit =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getAccountsUrl($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account to retrieve.
	* @return MozuClient
	*/
	public static function getAccountClient( $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $inStockNotificationSubscriptionId 
	* @return MozuClient
	*/
	public static function getInStockNotificationClient( $accountId,  $inStockNotificationSubscriptionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getInStockNotificationUrl($accountId, $inStockNotificationSubscriptionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getInStockNotificationsClient( $accountId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getInStockNotificationsUrl($accountId, $filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new customer account.
	*
	* @param CustomerAccount $account 
	* @return MozuClient
	*/
	public static function addAccountClient($account, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::addAccountUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param CustomerInStockNotificationSubscription $inStockNotificationSubscription 
	* @return MozuClient
	*/
	public static function addInStockNotificationClient($inStockNotificationSubscription,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::addInStockNotificationUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($inStockNotificationSubscription);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param CustomerAccount $account 
	* @return MozuClient
	*/
	public static function updateAccountClient($account,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::updateAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account to delete.
	*/
	public static function deleteAccountClient( $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::deleteAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $inStockNotificationSubscriptionId 
	*/
	public static function deleteInStockNotificationSubscriptionClient( $accountId,  $inStockNotificationSubscriptionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::deleteInStockNotificationSubscriptionUrl($accountId, $inStockNotificationSubscriptionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
