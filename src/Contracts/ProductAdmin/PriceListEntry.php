<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Mozu.ProductAdmin.Contracts.PriceListEntry ApiType DOCUMENT_HERE 
*/
class PriceListEntry
{
	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry cost ApiTypeMember DOCUMENT_HERE 
	*/
	public $cost;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry costMode ApiTypeMember DOCUMENT_HERE 
	*/
	public $costMode;

	/**
	*The localized currency code for the monetary amount. 
	*/
	public $currencyCode;

	/**
	*Indicates if the discount is restricted. If true, the system cannot apply any discounts to this product. Discount restrictions are defined at the master catalog level. Client administrators cannot override discount restrictions at the catalog level, but they can limit the restriction to a defined time interval.
	*/
	public $discountsRestricted;

	/**
	*The date and time on which the discount restriction period ends.
	*/
	public $discountsRestrictedEndDate;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry discountsRestrictedMode ApiTypeMember DOCUMENT_HERE 
	*/
	public $discountsRestrictedMode;

	/**
	*The date and time on which the discount restriction period starts.
	*/
	public $discountsRestrictedStartDate;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry endDate ApiTypeMember DOCUMENT_HERE 
	*/
	public $endDate;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry isVariation ApiTypeMember DOCUMENT_HERE 
	*/
	public $isVariation;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry map ApiTypeMember DOCUMENT_HERE 
	*/
	public $map;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry mapEndDate ApiTypeMember DOCUMENT_HERE 
	*/
	public $mapEndDate;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry mapMode ApiTypeMember DOCUMENT_HERE 
	*/
	public $mapMode;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry mapStartDate ApiTypeMember DOCUMENT_HERE 
	*/
	public $mapStartDate;

	/**
	*The manufacturer's suggested retail price for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry msrpMode ApiTypeMember DOCUMENT_HERE 
	*/
	public $msrpMode;

	/**
	*External unique identifier of the PriceList. Must be unique an only contain url sanitized characters. Max length is 50
	*/
	public $priceListCode;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry priceListEntryMode ApiTypeMember DOCUMENT_HERE 
	*/
	public $priceListEntryMode;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry priceListEntrySequence ApiTypeMember DOCUMENT_HERE 
	*/
	public $priceListEntrySequence;

	/**
	*The unique, user-defined  product code of a product, used throughout Mozu to reference and associate to a product.
	*/
	public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry startDate ApiTypeMember DOCUMENT_HERE 
	*/
	public $startDate;

	/**
	*Basic audit info about the object, including date, time, and user account. Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry extraEntries ApiTypeMember DOCUMENT_HERE 
	*/
	public $extraEntries;

	/**
	*List of option attributes configured for an object. These values are associated and used by products, product bundles, and product types.
	*/
	public $options;

	/**
	*Mozu.ProductAdmin.Contracts.PriceListEntry priceEntries ApiTypeMember DOCUMENT_HERE 
	*/
	public $priceEntries;

}

?>
