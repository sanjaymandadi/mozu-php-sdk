<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypePropertyClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the Properties subresource to define how property product attributes are used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypePropertyResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of product property attributes defined for a product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return array|AttributeInProductType 
	*/
	public function getProperties($productTypeId)
	{
		$mozuClient = ProductTypePropertyClient::getPropertiesClient($productTypeId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a product property attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @return AttributeInProductType 
	*/
	public function getProperty($attributeFQN, $productTypeId)
	{
		$mozuClient = ProductTypePropertyClient::getPropertyClient($attributeFQN, $productTypeId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Assigns a property attribute to the specified product type, according to the information defined in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param AttributeInProductType $attributeInProductType Properties of the property attribute to define for the specified product type.
	* @return AttributeInProductType 
	*/
	public function addProperty($productTypeId, $attributeInProductType)
	{
		$mozuClient = ProductTypePropertyClient::addPropertyClient($productTypeId, $attributeInProductType);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the definition of a property attribute for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param AttributeInProductType $attributeInProductType Properties of the property attribute to define for the product type.
	* @return AttributeInProductType 
	*/
	public function updateProperty($attributeFQN, $productTypeId, $attributeInProductType)
	{
		$mozuClient = ProductTypePropertyClient::updatePropertyClient($attributeFQN, $productTypeId, $attributeInProductType);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a property attribute previously defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	*/
	public function deleteProperty($attributeFQN, $productTypeId)
	{
		$mozuClient = ProductTypePropertyClient::deletePropertyClient($attributeFQN, $productTypeId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>
