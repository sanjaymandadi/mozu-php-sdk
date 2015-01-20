<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Carts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CartItemUrl  {

	/**
		* Get Resource Url for GetCartItem
		* @param string $cartItemId Identifier of the cart item to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCartItemUrl($cartItemId, $responseFields)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCartItems
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCartItemsUrl($responseFields)
	{
		$url = "/api/commerce/carts/current/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddItemToCart
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addItemToCartUrl($responseFields)
	{
		$url = "/api/commerce/carts/current/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCartItemQuantity
		* @param string $cartItemId Identifier of the cart item to update quantity.
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateCartItemQuantityUrl($cartItemId, $quantity, $responseFields)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}/{quantity}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCartItem
		* @param string $cartItemId Identifier of the cart item to update.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateCartItemUrl($cartItemId, $responseFields)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveAllCartItems
		* @return string Resource Url
	*/
	public static function removeAllCartItemsUrl()
	{
		$url = "/api/commerce/carts/current/items";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCartItem
		* @param string $cartItemId Identifier of the cart item to delete.
		* @return string Resource Url
	*/
	public static function deleteCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		return $mozuUrl;
	}
	
}

?>

