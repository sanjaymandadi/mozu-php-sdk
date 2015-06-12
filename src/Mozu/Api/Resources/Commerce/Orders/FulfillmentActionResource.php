<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\Clients\Commerce\Orders\FulfillmentActionClient;
use Mozu\Api\ApiContext;


/**
* Use the Fulfillment resource to manage shipments or pickups of collections of packages for an order.
*/
class FulfillmentActionResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Sets the fulfillment action to "Ship" or "PickUp". To ship an order or prepare it for in-store pickup, the order must have a customer name, the "Open" or "OpenAndProcessing" status. To ship the order, it must also have the full shipping address and shipping method. Shipping all packages or picking up all pickups for an order will complete a paid order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param FulfillmentAction $action Properties of an action to perform when fulfilling an item in an order, whether through in-store pickup or direct shipping.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function performFulfillmentAction($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::performFulfillmentActionClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Sets the fulfillment action to "Ship" or "PickUp". To ship an order or prepare it for in-store pickup, the order must have a customer name, the "Open" or "OpenAndProcessing" status. To ship the order, it must also have the full shipping address and shipping method. Shipping all packages or picking up all pickups for an order will complete a paid order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function performFulfillmentActionAsync($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::performFulfillmentActionClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* orders-fulfillment Post ResendPackageFulfillmentEmail description DOCUMENT_HERE 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param FulfillmentAction $action Properties of an action to perform when fulfilling an item in an order, whether through in-store pickup or direct shipping.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function resendPackageFulfillmentEmail($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::resendPackageFulfillmentEmailClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* orders-fulfillment Post ResendPackageFulfillmentEmail description DOCUMENT_HERE 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function resendPackageFulfillmentEmailAsync($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::resendPackageFulfillmentEmailClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

