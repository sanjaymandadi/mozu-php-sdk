<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\OrderNoteClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Order Notes subresource to manage merchant-level notes associated with an active order.
*/
class OrderNoteResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of all notes for an order.
	*
	* @param string $orderId Unique identifier of the order.
	* @return array|OrderNote 
	*/
	public function getOrderNotes($orderId)
	{
		$mozuClient = OrderNoteClient::getOrderNotesClient($orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a specific order note.
	*
	* @param string $noteId Unique identifier of the order note to retrieve.
	* @param string $orderId Unique identifier of the order associated with the note.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return OrderNote 
	*/
	public function getOrderNote($orderId, $noteId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::getOrderNoteClient($orderId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new merchant note for the specified order.
	*
	* @param string $orderId Unique identifier of the order for which to add a note.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param OrderNote $orderNote The alphanumeric text contained in the note. The maximum length is 256 characters.
	* @return OrderNote 
	*/
	public function createOrderNote($orderNote, $orderId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::createOrderNoteClient($orderNote, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates a specific note for an order.
	*
	* @param string $noteId Unique identifier of the order note.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param OrderNote $orderNote The content of the order note. The maximum length is 256 characters.
	* @return OrderNote 
	*/
	public function updateOrderNote($orderNote, $orderId, $noteId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::updateOrderNoteClient($orderNote, $orderId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the specified order note.
	*
	* @param string $noteId Unique identifier of the order note to delete.
	* @param string $orderId Unique identifier of the order associated with the note.
	*/
	public function deleteOrderNote($orderId, $noteId)
	{
		$mozuClient = OrderNoteClient::deleteOrderNoteClient($orderId, $noteId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

