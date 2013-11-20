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
use Mozu\Api\Clients\Commerce\WishlistClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class WishlistResource {

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
	* @param string $q 
	* @param int $qLimit 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return WishlistCollection 
	*/
	public function getWishlists($filter =  null, $pageSize =  null, $q =  null, $qLimit =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistClient::getWishlistsClient($filter, $pageSize, $q, $qLimit, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $wishlistId 
	* @return Wishlist 
	*/
	public function getWishlist( $wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistClient::getWishlistClient( $wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param Wishlist $wishlist 
	* @return Wishlist 
	*/
	public function createWishlist($wishlist, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistClient::createWishlistClient($wishlist, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $wishlistId 
	* @param Wishlist $wishlist 
	* @return Wishlist 
	*/
	public function updateWishlist($wishlist,  $wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistClient::updateWishlistClient($wishlist,  $wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $wishlistId 
	*/
	public function deleteWishlist( $wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistClient::deleteWishlistClient( $wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

