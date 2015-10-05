<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Storefront;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductUrl  {

	/**
		* Get Resource Url for GetProducts
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getProductsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/storefront/products/?filter={filter}&startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductInventory
		* @param string $locationCodes Array of location codes for which to retrieve product inventory information.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function getProductInventoryUrl($locationCodes, $productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/locationinventory?locationCodes={locationCodes}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("locationCodes", $locationCodes);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProduct
		* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @param bool $supressOutOfStock404 
		* @param string $variationProductCode Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
		* @return string Resource Url
	*/
	public static function getProductUrl($allowInactive, $productCode, $responseFields, $skipInventoryCheck, $supressOutOfStock404, $variationProductCode)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}?variationProductCode={variationProductCode}&allowInactive={allowInactive}&skipInventoryCheck={skipInventoryCheck}&supressOutOfStock404={supressOutOfStock404}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("allowInactive", $allowInactive);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		$url = $mozuUrl->formatUrl("supressOutOfStock404", $supressOutOfStock404);
		$url = $mozuUrl->formatUrl("variationProductCode", $variationProductCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductForIndexing
		* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function getProductForIndexingUrl($productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/indexing/{productCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ConfiguredProduct
		* @param bool $includeOptionDetails If true, the response returns details about the product. If false, returns a product summary such as the product name, price, and sale price.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @return string Resource Url
	*/
	public static function configuredProductUrl($includeOptionDetails, $productCode, $responseFields, $skipInventoryCheck)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/configure?includeOptionDetails={includeOptionDetails}&skipInventoryCheck={skipInventoryCheck}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("includeOptionDetails", $includeOptionDetails);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateProduct
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @return string Resource Url
	*/
	public static function validateProductUrl($productCode, $responseFields, $skipInventoryCheck)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/validate?skipInventoryCheck={skipInventoryCheck}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateDiscounts
		* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
		* @param int $customerAccountId The unique identifier of the customer account for which to retrieve wish lists.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @param string $variationProductCode Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
		* @return string Resource Url
	*/
	public static function validateDiscountsUrl($allowInactive, $customerAccountId, $productCode, $responseFields, $skipInventoryCheck, $variationProductCode)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/validateDiscounts?variationProductCode={variationProductCode}&customerAccountId={customerAccountId}&allowInactive={allowInactive}&skipInventoryCheck={skipInventoryCheck}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("allowInactive", $allowInactive);
		$url = $mozuUrl->formatUrl("customerAccountId", $customerAccountId);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		$url = $mozuUrl->formatUrl("variationProductCode", $variationProductCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductInventories
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function getProductInventoriesUrl($responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/locationinventory?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

