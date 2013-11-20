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

class ChannelGroupUrl  {

	/**
		* Get Resource Url for GetChannelGroups
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getChannelGroupsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/channelgroups/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetChannelGroup
		* @param string $code 
		* @return string Resource Url
	*/
	public static function getChannelGroupUrl($code)
	{
		$url = "/api/commerce/channelgroups/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for CreateChannelGroup
		* @return string Resource Url
	*/
	public static function createChannelGroupUrl()
	{
		$url = "/api/commerce/channelgroups/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateChannelGroup
		* @param string $code 
		* @return string Resource Url
	*/
	public static function updateChannelGroupUrl($code)
	{
		$url = "/api/commerce/channelgroups/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteChannelGroup
		* @param string $code 
		* @return string Resource Url
	*/
	public static function deleteChannelGroupUrl($code)
	{
		$url = "/api/commerce/channelgroups/{code}";
		$url = MozuUrl::formatUrl($url, "code", $code);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>
