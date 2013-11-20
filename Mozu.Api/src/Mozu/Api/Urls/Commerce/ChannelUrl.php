<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ChannelUrl  {

	/**
		* Get Resource Url for GetChannels
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getChannelsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/channels/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetChannel
		* @param string $code 
		* @return string Resource Url
	*/
	public static function getChannelUrl($code)
	{
		$url = "/api/commerce/channels/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for CreateChannel
		* @return string Resource Url
	*/
	public static function createChannelUrl()
	{
		$url = "/api/commerce/channels/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateChannel
		* @param string $code 
		* @return string Resource Url
	*/
	public static function updateChannelUrl($code)
	{
		$url = "/api/commerce/channels/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteChannel
		* @param string $code 
		* @return string Resource Url
	*/
	public static function deleteChannelUrl($code)
	{
		$url = "/api/commerce/channels/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>
