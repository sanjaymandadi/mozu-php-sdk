<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\PickupClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class PickupResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $orderId 
	* @param string $pickupId 
	* @return Pickup 
	*/
	public function getPickup( $orderId,  $pickupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PickupClient::getPickupClient( $orderId,  $pickupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @param string $pickupId 
	* @return array|string 
	*/
	public function getAvailablePickupFulfillmentActions( $orderId,  $pickupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PickupClient::getAvailablePickupFulfillmentActionsClient( $orderId,  $pickupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @param Pickup $pickup 
	* @return Pickup 
	*/
	public function createPickup($pickup,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PickupClient::createPickupClient($pickup,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @param string $pickupId 
	* @param Pickup $pickup 
	* @return Pickup 
	*/
	public function updatePickup($pickup,  $orderId,  $pickupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PickupClient::updatePickupClient($pickup,  $orderId,  $pickupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @param string $pickupId 
	*/
	public function deletePickup( $orderId,  $pickupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PickupClient::deletePickupClient( $orderId,  $pickupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

