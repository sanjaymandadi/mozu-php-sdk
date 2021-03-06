<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\ExtendedPropertyUrl;


/**
* Use the Extended Properties resource to store tracking strings for your orders. Extended properties can help you track affiliate sources.
*/
class ExtendedPropertyClient {

	/**
	* Retrieves the extended property string associated with the order. 
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @return MozuClient
	*/
	public static function getExtendedPropertiesClient($orderId, $draft =  null)
	{
		$url = ExtendedPropertyUrl::getExtendedPropertiesUrl($draft, $orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Create an extended property for the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param array|ExtendedProperty $extendedProperties Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function addExtendedPropertiesClient($extendedProperties, $orderId, $updateMode =  null, $version =  null)
	{
		$url = ExtendedPropertyUrl::addExtendedPropertiesUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extendedProperties);
		return $mozuClient;

	}
	
	/**
	* Updates one ore more extended properties.
	*
	* @param string $key The extended property key.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param bool $upsert Inserts and updates an extended property.
        
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param ExtendedProperty $extendedProperty Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function updateExtendedPropertyClient($extendedProperty, $orderId, $key, $updateMode =  null, $version =  null, $upsert =  null, $responseFields =  null)
	{
		$url = ExtendedPropertyUrl::updateExtendedPropertyUrl($key, $orderId, $responseFields, $updateMode, $upsert, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extendedProperty);
		return $mozuClient;

	}
	
	/**
	* Updates one or more extended properties.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param bool $upsert Inserts and updates the extended property.
        
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param array|ExtendedProperty $extendedProperties Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function updateExtendedPropertiesClient($extendedProperties, $orderId, $updateMode =  null, $version =  null, $upsert =  null)
	{
		$url = ExtendedPropertyUrl::updateExtendedPropertiesUrl($orderId, $updateMode, $upsert, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extendedProperties);
		return $mozuClient;

	}
	
	/**
	* Deletes one or more extended properties.
	*
	* @param string $key 
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	*/
	public static function deleteExtendedPropertyClient($orderId, $key, $updateMode =  null, $version =  null)
	{
		$url = ExtendedPropertyUrl::deleteExtendedPropertyUrl($key, $orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes the extended property associated with the order. 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param array|string $keys 
	*/
	public static function deleteExtendedPropertiesClient($keys, $orderId, $updateMode =  null, $version =  null)
	{
		$url = ExtendedPropertyUrl::deleteExtendedPropertiesUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($keys);
		return $mozuClient;

	}
	
	
}

?>

