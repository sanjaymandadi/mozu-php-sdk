<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\OrderClient;
use Mozu\Api\ApiContext;

/**
* Manage order processing, payment, and shipping. Includes getting customer payment details, shipping address and selected shipment method, processing payment transactions, and, once paid, shipping the order to the shopper.
*/
class OrderResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of orders according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter an order's search results by any of its properties, including status, contact information, or total. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=Status+eq+Submitted"</b>
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param string $q 
	* @param int $qLimit 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return OrderCollection 
	*/
	public function getOrders($filter =  null, $pageSize =  null, $q =  null, $qLimit =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::getOrdersClient($filter, $pageSize, $q, $qLimit, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves available order actions which depends on the status of the order. Actions are "CreateOrder," "SubmitOrder," "SetOrderAsProcessing," "CloseOrder," or "CancelOrder."
	*
	* @param string $orderId Unique identifier of the available order actions to get.
	* @return array|string 
	*/
	public function getAvailableActions( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::getAvailableActionsClient( $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @return array|TaxableOrder 
	*/
	public function getTaxableOrders( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::getTaxableOrdersClient( $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of an order specified by the order ID.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order details to get.
	* @return Order 
	*/
	public function getOrder( $orderId, $draft =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::getOrderClient( $orderId, $draft, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new order for no-cart quick-ordering scenarios.
	*
	* @param Order $order All properties of the order to place.
	* @return Order 
	*/
	public function createOrder($order, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::createOrderClient($order, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new order from an existing cart when the customer chooses to proceed to checkout.
	*
	* @param string $cartId Unique identifier of the cart. This is the original cart ID expressed as a GUID.
	* @return Order 
	*/
	public function createOrderFromCart( $cartId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::createOrderFromCartClient( $cartId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Perform the specified action for an order. Available actions depend on the current status of the order. When in doubt, first get a list of available order actions.
	*
	* @param string $orderId Unique identifier of the order.
	* @param OrderAction $action Action to perform, which can be "CreateOrder," "SubmitOrder," "SetOrderAsProcessing," "CloseOrder," or "CancelOrder."
	* @return Order 
	*/
	public function performOrderAction($action,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::performOrderActionClient($action,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the properties of a discount applied to an order.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $orderId Unique identifier of the order discount. System-supplied and read only.
	* @param string $updateMode Specifies whether to modify the discount by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version 
	* @param AppliedDiscount $discount Properties of the order discount to update.
	* @return Order 
	*/
	public function updateOrderDiscount($discount,  $discountId,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::updateOrderDiscountClient($discount,  $discountId,  $orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the current draft version of the order, which also deletes any uncommitted changes made to the order in draft mode.
	*
	* @param string $orderId Unique identifier of the order associated with the draft to delete.
	* @param string $version The version of the order draft to delete.
	*/
	public function deleteOrderDraft( $orderId, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::deleteOrderDraftClient( $orderId, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @return Order 
	*/
	public function changeOrderUserId( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::changeOrderUserIdClient( $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the specified order when additional order information, such as shipping or billing information, is modified during the checkout process.
	*
	* @param string $orderId Unique identifier of the order to update.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version 
	* @param Order $order The properties of the order to update.
	* @return Order 
	*/
	public function updateOrder($order,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderClient::updateOrderClient($order,  $orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>
