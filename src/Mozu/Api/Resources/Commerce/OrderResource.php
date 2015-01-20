<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\OrderClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Orders resource to manage all components of order processing, payment, and fulfillment.
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
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter an order's search results by any of its properties, including status, contact information, or total. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Status+eq+Submitted"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms to use in the query when searching across order number and the name or email of the billing contact. Separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return OrderCollection 
	*/
	public function getOrders($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $qLimit =  null, $responseFields =  null)
	{
		$mozuClient = OrderClient::getOrdersClient($startIndex, $pageSize, $sortBy, $filter, $q, $qLimit, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the actions available to perform for an order based on its current status.
	*
	* @param string $orderId Unique identifier of the available order actions to get.
	* @return array|string 
	*/
	public function getAvailableActions($orderId)
	{
		$mozuClient = OrderClient::getAvailableActionsClient($orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves an order for the purpose of splitting it into multiple taxable orders in order to fulfill the order in multiple locations.
	*
	* @param string $orderId Unique identifier of the order to retrieve.
	* @return array|TaxableOrder 
	*/
	public function getTaxableOrders($orderId)
	{
		$mozuClient = OrderClient::getTaxableOrdersClient($orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of an order specified by the order ID.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order details to get.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Order 
	*/
	public function getOrder($orderId, $draft =  null, $responseFields =  null)
	{
		$mozuClient = OrderClient::getOrderClient($orderId, $draft, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new order from an existing cart when the customer chooses to proceed to checkout.
	*
	* @param string $cartId Unique identifier of the cart. This is the original cart ID expressed as a GUID.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Order 
	*/
	public function createOrderFromCart($cartId, $responseFields =  null)
	{
		$mozuClient = OrderClient::createOrderFromCartClient($cartId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new order for no-cart quick-ordering scenarios.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Order $order Properties of the order to create and submit.
	* @return Order 
	*/
	public function createOrder($order, $responseFields =  null)
	{
		$mozuClient = OrderClient::createOrderClient($order, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Perform the specified action for an order. The actions you can perform depend on the current status of the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param OrderAction $action The action to perform for the order.
	* @return Order 
	*/
	public function performOrderAction($action, $orderId, $responseFields =  null)
	{
		$mozuClient = OrderClient::performOrderActionClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the properties of a discount applied to an order.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $orderId Unique identifier of the order discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to modify the discount by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param AppliedDiscount $discount Properties of the order discount to update.
	* @return Order 
	*/
	public function updateOrderDiscount($discount, $orderId, $discountId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$mozuClient = OrderClient::updateOrderDiscountClient($discount, $orderId, $discountId, $updateMode, $version, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the current draft version of the order, which also deletes any uncommitted changes made to the order in draft mode.
	*
	* @param string $orderId Unique identifier of the order associated with the draft to delete.
	* @param string $version If applicable, the version of the order draft to delete.
	*/
	public function deleteOrderDraft($orderId, $version =  null)
	{
		$mozuClient = OrderClient::deleteOrderDraftClient($orderId, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Updates the user ID of the shopper who placed the order to the current user.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Order 
	*/
	public function changeOrderUserId($orderId, $responseFields =  null)
	{
		$mozuClient = OrderClient::changeOrderUserIdClient($orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the specified order when additional order information, such as shipping or billing information, is modified during the checkout process.
	*
	* @param string $orderId Unique identifier of the order to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Order $order The properties of the order to update.
	* @return Order 
	*/
	public function updateOrder($order, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$mozuClient = OrderClient::updateOrderClient($order, $orderId, $updateMode, $version, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

