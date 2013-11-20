<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\PropertyTypeClient;
use Mozu\Api\ApiContext;

/**
* Use the property types subresource to manage content properties.
*/
class PropertyTypeResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieve a list of the content property types.
	*
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param int $startIndex 
	* @return PropertyTypeCollection 
	*/
	public function getList($pageSize =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PropertyTypeClient::getListClient($pageSize, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve the details of the content property type.
	*
	* @param string $propertyTypeName The name of the content property type.
	* @return PropertyType 
	*/
	public function get( $propertyTypeName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PropertyTypeClient::getClient( $propertyTypeName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve the value types associated with a content property.
	*
	* @return array|PropertyValueType 
	*/
	public function propertyValueTypes(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PropertyTypeClient::propertyValueTypesClient($authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>
