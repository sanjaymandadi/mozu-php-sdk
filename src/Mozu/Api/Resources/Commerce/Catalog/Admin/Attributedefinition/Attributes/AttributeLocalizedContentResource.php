<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeLocalizedContentClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class AttributeLocalizedContentResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $attributeFQN 
	* @return array|AttributeLocalizedContent 
	*/
	public function getAttributeLocalizedContents($attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentsClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return AttributeLocalizedContent 
	*/
	public function getAttributeLocalizedContent($attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentClient($attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeLocalizedContent $localizedContent 
	* @return AttributeLocalizedContent 
	*/
	public function addLocalizedContent($localizedContent, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::addLocalizedContentClient($localizedContent, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param array|AttributeLocalizedContent $localizedContent 
	* @return array|AttributeLocalizedContent 
	*/
	public function updateLocalizedContents($localizedContent, $attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentsClient($localizedContent, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeLocalizedContent $localizedContent 
	* @return AttributeLocalizedContent 
	*/
	public function updateLocalizedContent($localizedContent, $attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentClient($localizedContent, $attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	*/
	public function deleteLocalizedContent($attributeFQN, $localeCode)
	{
		$mozuClient = AttributeLocalizedContentClient::deleteLocalizedContentClient($attributeFQN, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

