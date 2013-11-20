<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Carts\ChangeMessageUrl;

/**
* System messages for live carts to notify the shopper about a product price or inventory change. System-supplied and read-only. For example: Product price is reduced due to a buy one, get one 50% off (BOGO) sale. A message may appear if the product is out of stock during the cart shopping process.
*/
class ChangeMessageClient {

	/**
	* Retrieves messages to and from the current shopper. These are messages supplied by the system to notify the shopper of price increases or decreases or product unavailability.
	*
	* @return MozuClient
	*/
	public static function getMessagesClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChangeMessageUrl::getMessagesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes all messages associated with the cart of the current shopper.
	*
	*/
	public static function removeAllMessagesClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChangeMessageUrl::removeAllMessagesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Removes a single message associated with the cart of the current shopper.
	*
	* @param string $messageId Identifier of the message to remove from the cart.
	*/
	public static function removeMessageClient( $messageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChangeMessageUrl::removeMessageUrl($messageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
