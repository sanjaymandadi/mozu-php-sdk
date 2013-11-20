<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\FulfillmentActionUrl;

/**
* 
*/
class FulfillmentActionClient {

	/**
	* 
	*
	* @param string $orderId 
	* @param FulfillmentAction $action 
	* @return MozuClient
	*/
	public static function performFulfillmentActionClient($action,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = FulfillmentActionUrl::performFulfillmentActionUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
