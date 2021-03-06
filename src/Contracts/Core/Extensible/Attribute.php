<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\Extensible;



/**
*	Properties of an attribute used to describe customers or orders.
*/
class Attribute
{
	/**
	*The administrator name associated with the object/data.
	*/
	public $adminName;

	/**
	*Merchant-defined code for an extensible attribute. This code may be used to generate an object's fully qualified name, such as for products.
	*/
	public $attributeCode;

	/**
	*The fully qualified name of the attribute. The attributeDefiniteId may be used to generate this name.
	*/
	public $attributeFQN;

	/**
	*The data type of the source product property, typically of type Bool, DateTime, Number, or String.
	*/
	public $dataType;

	/**
	*Whether the customer or order attribute appears in  only, or in both  and the website storefront. Possible values are Admin and AdminAndStorefront.
	*/
	public $displayGroup;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*The type of input selection used to define a value for the attribute, including Yes/No, Date, DateTime, List, TextBox, or TextArea.
	*/
	public $inputType;

	/**
	*Indicates if the object or feature is active. This indicator is used for subscriptions (at the site or tenant level), customer accounts, products and variations.
	*/
	public $isActive;

	/**
	*If true, the attribute can have more than one value.
	*/
	public $isMultiValued;

	/**
	*Flag used to indicate if this attribute definition is read-only. Once an attribute definition is set to read-only this action cannot be undone. 
	*/
	public $isReadOnly;

	/**
	*Indicates if the property, attribute, product option, or product extra is required. If true, the object must have a defined value.
	*/
	public $isRequired;

	/**
	*If true, the attribute is visible in its defined display group.
	*/
	public $isVisible;

	/**
	*If applicable, the registered namespace associated with objects, used to generate the fully qualified name. If no namespace is defined, the namespace associated with the tenant is automatically assigned.
	*/
	public $namespace;

	/**
	*Integer that represents the sequence order of the attribute.
	*/
	public $order;

	/**
	*An attribute value type is either predefined vocabulary by the admin during attribute set up or user-defined with an appropriate type (AdminEntered or ShopperEntered depending on the user). These types are used by products and attributes. The difference between predefined values versus manually entered values is such that the first choice is a set of options to choose from. AdminEntered and ShopperEntered are values that are entered rather than system-supplied and are not stored in the database, but captured during a live commerce operations such as during an order.
	*/
	public $valueType;

	/**
	*List of metadata key-value pairs defined for an extensible attribute.
	*/
	public $attributeMetadata;

	/**
	*Basic audit info about the object, including date, time, and user account. Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Localizable content (such as a name and/or description) for an attribute. The content may be localized when displayed according to the locale code specified by the master catalog. Content can include descriptive text for product extensible attributes, catalog-level descriptions (displayed if isContentOverriden is true), product bundles, and customer account notes.
	*/
	public $content;

	/**
	*Properties used when validating a value entered for an object, including extensible attributes, products attributes, and database entries.
	*/
	public $validation;

	/**
	*List of valid vocabulary values defined for an attribute.
	*/
	public $vocabularyValues;

}

?>
