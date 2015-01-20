<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Carts\ChangeMessageClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Cart Messages resource to retrieve messages for live carts that the system logs when a product's price or inventory level changes.
*/
class ChangeMessageResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the messages associated with the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CartChangeMessageCollection 
	*/
	public function getMessages($responseFields =  null)
	{
		$mozuClient = ChangeMessageClient::getMessagesClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes all messages associated with the cart of the current shopper.
	*
	*/
	public function removeAllMessages()
	{
		$mozuClient = ChangeMessageClient::removeAllMessagesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Removes a single message associated with the cart of the current shopper.
	*
	* @param string $messageId Identifier of the message to remove from the cart.
	*/
	public function removeMessage($messageId)
	{
		$mozuClient = ChangeMessageClient::removeMessageClient($messageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

