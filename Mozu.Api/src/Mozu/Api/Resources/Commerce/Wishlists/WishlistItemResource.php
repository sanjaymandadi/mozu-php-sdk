<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Wishlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Wishlists\WishlistItemClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class WishlistItemResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $wishlistId 
	* @param string $wishlistItemId 
	* @return WishlistItem 
	*/
	public function getWishlistItem( $wishlistId,  $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::getWishlistItemClient( $wishlistId,  $wishlistItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @param string $wishlistId 
	* @return WishlistItemCollection 
	*/
	public function getWishlistItems( $wishlistId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::getWishlistItemsClient( $wishlistId, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $wishlistId 
	* @param WishlistItem $wishlistItem 
	* @return WishlistItem 
	*/
	public function addItemToWishlist($wishlistItem,  $wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::addItemToWishlistClient($wishlistItem,  $wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $wishlistId 
	* @param string $wishlistItemId 
	* @param WishlistItem $wishlistItem 
	* @return WishlistItem 
	*/
	public function updateWishlistItem($wishlistItem,  $wishlistId,  $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::updateWishlistItemClient($wishlistItem,  $wishlistId,  $wishlistItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $quantity 
	* @param string $wishlistId 
	* @param string $wishlistItemId 
	* @return WishlistItem 
	*/
	public function updateWishlistItemQuantity( $quantity,  $wishlistId,  $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::updateWishlistItemQuantityClient( $quantity,  $wishlistId,  $wishlistItemId, $authTicket);
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
	public function removeAllWishlistItems( $wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::removeAllWishlistItemsClient( $wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $wishlistId 
	* @param string $wishlistItemId 
	*/
	public function deleteWishlistItem( $wishlistId,  $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::deleteWishlistItemClient( $wishlistId,  $wishlistItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

