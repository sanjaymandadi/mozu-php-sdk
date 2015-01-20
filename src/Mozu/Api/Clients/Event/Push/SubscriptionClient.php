<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Event\Push;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Event\Push\SubscriptionUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class SubscriptionClient {

	/**
	* 
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getSubscriptionsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SubscriptionUrl::getSubscriptionsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

