<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeOptionUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Options subresource to define how an option attribute is used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypeOptionClient {

	/**
	* Retrieves a list of option product attributes defined for the specified product type.
	*
	* @param int $productTypeId Identifier of the product type to retrieve.
	* @return MozuClient
	*/
	public static function getOptionsClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypeOptionUrl::getOptionsUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of an option attribute defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId The identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getOptionClient($dataViewMode, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$url = ProductTypeOptionUrl::getOptionUrl($attributeFQN, $productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Assigns an option attribute to the product type based on the information supplied in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of the option attribute to define for the specified product type.
	* @return MozuClient
	*/
	public static function addOptionClient($dataViewMode, $attributeInProductType, $productTypeId, $responseFields =  null)
	{
		$url = ProductTypeOptionUrl::addOptionUrl($productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates an option attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of the option product attribute to define for the specified product type.
	* @return MozuClient
	*/
	public static function updateOptionClient($dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$url = ProductTypeOptionUrl::updateOptionUrl($attributeFQN, $productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Removes an option attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	*/
	public static function deleteOptionClient($dataViewMode, $productTypeId, $attributeFQN)
	{
		$url = ProductTypeOptionUrl::deleteOptionUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

