<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerAttributeUrl;

/**
* Mozu customers and merchants can create, view, update, and delete attributes for a customer account.
*/
class CustomerAttributeClient {

	/**
	* 
	*
	* @param int $accountId 
	* @param string $attributeFQN 
	* @return MozuClient
	*/
	public static function getAccountAttributeByFqnClient( $accountId,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAttributeUrl::getAccountAttributeByFqnUrl($accountId, $attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the contents of an attribute associated with the specified customer account.
	*
	* @param int $accountId Identifier of the customer account associated with the attribute to retrieve.
	* @param int $attributeId Identifier of the customer account attribute to retrieve.
	* @return MozuClient
	*/
	public static function getAccountAttributeClient( $accountId,  $attributeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAttributeUrl::getAccountAttributeUrl($accountId, $attributeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the list of customer account attributes.
	*
	* @param int $accountId Identifier of the customer account associated with the attributes to retrieve.
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountAttributesClient( $accountId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAttributeUrl::getAccountAttributesUrl($accountId, $filter, $pageSize, $sortBy, $startIndex);
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
	* @param CustomerAttribute $customerAccountAttribute 
	* @return MozuClient
	*/
	public static function addAccountAttributeClient($customerAccountAttribute,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAttributeUrl::addAccountAttributeUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerAccountAttribute);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Update a single customer account attribute by providing the customer account ID. This operation can optionally indicate whether or not items missing from the collection should be removed.
	*
	* @param int $accountId Identifier of the customer account associated with the attribute.
	* @param CustomerAttribute $customerAccountAttribute The properties of the customer account attribute being updated.
	* @return MozuClient
	*/
	public static function updateAccountAttributeClient($customerAccountAttribute,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAttributeUrl::updateAccountAttributeUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerAccountAttribute);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
