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
use Mozu\Api\Clients\Commerce\ChannelGroupClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class ChannelGroupResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ChannelGroupCollection 
	*/
	public function getChannelGroups($filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::getChannelGroupsClient($filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @return ChannelGroup 
	*/
	public function getChannelGroup( $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::getChannelGroupClient( $code, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param ChannelGroup $channelGroup 
	* @return ChannelGroup 
	*/
	public function createChannelGroup($channelGroup, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::createChannelGroupClient($channelGroup, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @param ChannelGroup $channelGroup 
	* @return ChannelGroup 
	*/
	public function updateChannelGroup($channelGroup,  $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::updateChannelGroupClient($channelGroup,  $code, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	*/
	public function deleteChannelGroup( $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::deleteChannelGroupClient( $code, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

