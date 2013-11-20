<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\AttributeClient;
use Mozu\Api\ApiContext;

/**
* Attributes allow a merchant to define a product base type by extending product details. Define details, such as specifications, to describe products. Create attributes to share across several or all products in a store or stores such as price, size, weight, color, and brand. Some attributes will apply to a specific type of product or a single product, for example, screen resolution or storage capacity. Create attributes separately from products to share common attributes across products. <br></br> Attributes are options, extras, and properties. Options are a a grouping of option values. Products with options do not produce child products with unique SKU's. Options themselves are not tied to inventory. However, they are tied to a product and are only available in the cart when a product is being added, updated, or removed. Examples: color or size. <br></br> Option values are the choices available in an option group. Examples: red, blue, green or small, medium, large. <br></br> Extras are product details to add on to the product itself. Examples: Upgrades, monogram. Properties are Examples: Brand name or UPC Code.
*/
class AttributeResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter "A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - ""filter=IsDisplayed+eq+true"""
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return AttributeCollection 
	*/
	public function getAttributes($dataViewMode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AttributeClient::getAttributesClient($dataViewMode, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves summary details of a single attribute, such as whether it's required, has multiple values, or is entered by the shopper. Another operation retrieves the attribute's list of attribute values.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @return Attribute 
	*/
	public function getAttribute($dataViewMode,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AttributeClient::getAttributeClient($dataViewMode,  $attributeFQN, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new attribute to describe one aspect of a product such as color or size. Specify several properties when creating the attribute. Include its display name, whether it represents a product option that a shopper selects when purchasing it, or whether the shopper supplies the value (if required to do so), such as engraved initials. Include how attribute values should appear on the storefront such as via radio buttons or text boxes.
	*
	* @param Attribute $attribute Properties of the attribute to create.
	* @return Attribute 
	*/
	public function addAttribute($dataViewMode, $attribute, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AttributeClient::addAttributeClient($dataViewMode, $attribute, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates an existing attribute with attribute properties to set.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param Attribute $attribute Any properties of the attribute that to update.
	* @return Attribute 
	*/
	public function updateAttribute($dataViewMode, $attribute,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AttributeClient::updateAttributeClient($dataViewMode, $attribute,  $attributeFQN, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes an existing attribute.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	*/
	public function deleteAttribute($dataViewMode,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AttributeClient::deleteAttributeClient($dataViewMode,  $attributeFQN, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
