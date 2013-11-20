<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Developer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Developer\DeveloperAccountUrl;

/**
* 
*/
class DeveloperAccountClient {

	/**
	* 
	*
	* @param int $accountId 
	* @return MozuClient
	*/
	public static function getDeveloperAccountClient($accountId =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DeveloperAccountUrl::getDeveloperAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

