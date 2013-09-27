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
	* Retrieves the contents of an attribute associated with the specified customer account.
	*
	* @param int $accountId Identifier of the customer account associated with the attribute to retrieve.
	* @param int $attributeId Identifier of the customer account attribute to retrieve.
	* @return MozuClient
	*/
	public static function getAccountAttributeClient($accountId, $attributeId)
	{
		$url = CustomerAttributeUrl::getAccountAttributeUrl($accountId, $attributeId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
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
	public static function getAccountAttributesClient($accountId, $filter, $pageSize, $sortBy, $startIndex)
	{
		$url = CustomerAttributeUrl::getAccountAttributesUrl($accountId, $filter, $pageSize, $sortBy, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new attribute to associate with the specified customer account.
	*
	* @param int $accountId Identifier of the customer account associated with the new attribute.
	* @param array|CustomerAttribute $customerAccountAttributes The properties of the customer account attribute to create.
	* @return MozuClient
	*/
	public static function addAccountAttributesClient($accountId, $customerAccountAttributes)
	{
		$url = CustomerAttributeUrl::addAccountAttributesUrl($accountId);
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($customerAccountAttributes);
		return $mozuClient;

	}
	
	/**
	* Update a single customer account attribute by providing the customer account ID. This operation can optionally indicate whether or not items missing from the collection should be removed.
	*
	* @param int $accountId Identifier of the customer account associated with the attribute.
	* @param bool $removeMissing If true, remove the items missing from the collection. If false, do not remove items missing from the collection.
	* @param array|CustomerAttribute $customerAccountAttribute The properties of the customer account attribute being updated.
	* @return MozuClient
	*/
	public static function updateAccountAttributeClient($accountId, $removeMissing, $customerAccountAttribute)
	{
		$url = CustomerAttributeUrl::updateAccountAttributeUrl($accountId, $removeMissing);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($customerAccountAttribute);
		return $mozuClient;

	}
	
	
}

?>
