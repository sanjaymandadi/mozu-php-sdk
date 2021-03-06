<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\Clients\Commerce\Orders\ExtendedPropertyClient;
use Mozu\Api\ApiContext;


/**
* Use the Extended Properties resource to store tracking strings for your orders. Extended properties can help you track affiliate sources.
*/
class ExtendedPropertyResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the extended property string associated with the order. 
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @return array|ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function getExtendedProperties($orderId, $draft =  null)
	{
		$mozuClient = ExtendedPropertyClient::getExtendedPropertiesClient($orderId, $draft);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the extended property string associated with the order. 
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getExtendedPropertiesAsync($orderId, $draft =  null)
	{
		$mozuClient = ExtendedPropertyClient::getExtendedPropertiesClient($orderId, $draft);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Create an extended property for the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param array|ExtendedProperty $extendedProperties Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return array|ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function addExtendedProperties($extendedProperties, $orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = ExtendedPropertyClient::addExtendedPropertiesClient($extendedProperties, $orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Create an extended property for the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addExtendedPropertiesAsync($extendedProperties, $orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = ExtendedPropertyClient::addExtendedPropertiesClient($extendedProperties, $orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

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
	* @return ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtendedProperty($extendedProperty, $orderId, $key, $updateMode =  null, $version =  null, $upsert =  null, $responseFields =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertyClient($extendedProperty, $orderId, $key, $updateMode, $version, $upsert, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

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
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateExtendedPropertyAsync($extendedProperty, $orderId, $key, $updateMode =  null, $version =  null, $upsert =  null, $responseFields =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertyClient($extendedProperty, $orderId, $key, $updateMode, $version, $upsert, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more extended properties.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param bool $upsert Inserts and updates the extended property.
        
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param array|ExtendedProperty $extendedProperties Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return array|ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtendedProperties($extendedProperties, $orderId, $updateMode =  null, $version =  null, $upsert =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertiesClient($extendedProperties, $orderId, $updateMode, $version, $upsert);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more extended properties.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param bool $upsert Inserts and updates the extended property.
        
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateExtendedPropertiesAsync($extendedProperties, $orderId, $updateMode =  null, $version =  null, $upsert =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertiesClient($extendedProperties, $orderId, $updateMode, $version, $upsert);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes one or more extended properties.
	*
	* @param string $key 
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteExtendedProperty($orderId, $key, $updateMode =  null, $version =  null)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertyClient($orderId, $key, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes one or more extended properties.
	*
	* @param string $key 
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteExtendedPropertyAsync($orderId, $key, $updateMode =  null, $version =  null)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertyClient($orderId, $key, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the extended property associated with the order. 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param array|string $keys 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteExtendedProperties($keys, $orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertiesClient($keys, $orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the extended property associated with the order. 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteExtendedPropertiesAsync($keys, $orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertiesClient($keys, $orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

