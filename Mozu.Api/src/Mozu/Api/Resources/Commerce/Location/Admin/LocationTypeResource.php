<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Location\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Location\Admin\LocationTypeClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;

/**
* 
*/
class LocationTypeResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @return array|LocationType 
	*/
	public function getLocationTypes(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationTypeClient::getLocationTypesClient($authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	* @return LocationType 
	*/
	public function getLocationType( $locationTypeCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationTypeClient::getLocationTypeClient( $locationTypeCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param LocationType $locationType 
	* @return LocationType 
	*/
	public function addLocationType($locationType, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationTypeClient::addLocationTypeClient($locationType, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	* @param LocationType $locationType 
	* @return LocationType 
	*/
	public function updateLocationType($locationType,  $locationTypeCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationTypeClient::updateLocationTypeClient($locationType,  $locationTypeCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	*/
	public function deleteLocationType( $locationTypeCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationTypeClient::deleteLocationTypeClient( $locationTypeCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

