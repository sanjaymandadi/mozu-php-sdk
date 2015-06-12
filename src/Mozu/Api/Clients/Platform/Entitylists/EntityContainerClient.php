<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Entitylists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Entitylists\EntityContainerUrl;


/**
* Entity containers provide all properties and data for entities within a site/tenant. This data encapsulates all associated IDs including entity lists, entity views, site, tenant, entities, and more.
*/
class EntityContainerClient {

	/**
	* Retrieves an entity container, providing all schema and rules and associated IDs for entities.
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getEntityContainerClient($entityListFullName, $id, $responseFields =  null)
	{
		$url = EntityContainerUrl::getEntityContainerUrl($entityListFullName, $id, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a collection of entity containers. Each container holds a set of entities per ID. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
	* @return MozuClient
	*/
	public static function getEntityContainersClient($entityListFullName, $pageSize =  null, $startIndex =  null, $filter =  null, $sortBy =  null, $responseFields =  null)
	{
		$url = EntityContainerUrl::getEntityContainersUrl($entityListFullName, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

