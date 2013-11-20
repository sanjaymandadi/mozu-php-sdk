<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\CustomerAccountClient;
use Mozu\Api\ApiContext;

/**
* Create, view, update, and delete a contact in a customer account. A customer account may have multiple contacts for billing or shipping addresses. Each contact may also list any groups to which the contact belongs and whether the contact accepts marketing material such as newsletters or email offers.
*/
class CustomerAccountResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

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
	* @return CustomerAccountCollection 
	*/
	public function getAccounts($fields =  null, $filter =  null, $pageSize =  null, $q =  null, $qLimit =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::getAccountsClient($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account to retrieve.
	* @return CustomerAccount 
	*/
	public function getAccount( $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::getAccountClient( $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $inStockNotificationSubscriptionId 
	* @return CustomerInStockNotificationSubscription 
	*/
	public function getInStockNotification( $accountId,  $inStockNotificationSubscriptionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::getInStockNotificationClient( $accountId,  $inStockNotificationSubscriptionId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CustomerInStockNotificationSubscriptionCollection 
	*/
	public function getInStockNotifications( $accountId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::getInStockNotificationsClient( $accountId, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new customer account.
	*
	* @param CustomerAccount $account 
	* @return CustomerAccount 
	*/
	public function addAccount($account, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::addAccountClient($account, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param CustomerInStockNotificationSubscription $inStockNotificationSubscription 
	* @return CustomerInStockNotificationSubscription 
	*/
	public function addInStockNotification($inStockNotificationSubscription,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::addInStockNotificationClient($inStockNotificationSubscription,  $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param CustomerAccount $account 
	* @return CustomerAccount 
	*/
	public function updateAccount($account,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::updateAccountClient($account,  $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account to delete.
	*/
	public function deleteAccount( $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::deleteAccountClient( $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $inStockNotificationSubscriptionId 
	*/
	public function deleteInStockNotificationSubscription( $accountId,  $inStockNotificationSubscriptionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerAccountClient::deleteInStockNotificationSubscriptionClient( $accountId,  $inStockNotificationSubscriptionId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

