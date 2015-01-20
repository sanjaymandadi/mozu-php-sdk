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

class ChangeMessageUrl  {

	/**
		* Get Resource Url for GetMessages
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getMessagesUrl($responseFields)
	{
		$url = "/api/commerce/carts/current/messages?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveAllMessages
		* @return string Resource Url
	*/
	public static function removeAllMessagesUrl()
	{
		$url = "/api/commerce/carts/current/messages";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveMessage
		* @param string $messageId Identifier of the message to remove from the cart.
		* @return string Resource Url
	*/
	public static function removeMessageUrl($messageId)
	{
		$url = "/api/commerce/carts/current/messages/{messageId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("messageId", $messageId);
		return $mozuUrl;
	}
	
}

?>

