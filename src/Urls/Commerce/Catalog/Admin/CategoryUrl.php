<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CategoryUrl  {

	/**
		* Get Resource Url for GetCategories
		* @param string $filter A set of filter expressions representing the search parameters for a query: eq=equals, ne=not equals, gt=greater than, lt = less than or equals, gt = greater than or equals, lt = less than or equals, sw = starts with, or cont = contains. Optional.
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getCategoriesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/categories/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetChildCategories
		* @param int $categoryId Unique identifier of the category to modify.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getChildCategoriesUrl($categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}/children?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCategory
		* @param int $categoryId Unique identifier of the category to modify.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCategoryUrl($categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddCategory
		* @param bool $incrementSequence If true, when adding a new product category, set the sequence number of the new category to an increment of one integer greater than the maximum available sequence number across all product categories. If false, set the sequence number to zero.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addCategoryUrl($incrementSequence, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/?incrementSequence={incrementSequence}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("incrementSequence", $incrementSequence);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateDynamicExpression
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function validateDynamicExpressionUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/ValidateDynamicExpression?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateRealTimeDynamicExpression
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function validateRealTimeDynamicExpressionUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/ValidateRealTimeDynamicExpression?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCategory
		* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. The default value is false.
		* @param int $categoryId Unique identifier of the category to modify.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateCategoryUrl($cascadeVisibility, $categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}?cascadeVisibility={cascadeVisibility}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cascadeVisibility", $cascadeVisibility);
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCategoryById
		* @param bool $cascadeDelete If true, also delete all subcategories associated with the specified category.
		* @param int $categoryId Unique identifier of the category to modify.
		* @param bool $forceDelete 
		* @param bool $reassignToParent 
		* @return string Resource Url
	*/
	public static function deleteCategoryByIdUrl($cascadeDelete, $categoryId, $forceDelete, $reassignToParent)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}/?cascadeDelete={cascadeDelete}&forceDelete={forceDelete}&reassignToParent={reassignToParent}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("cascadeDelete", $cascadeDelete);
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("forceDelete", $forceDelete);
		$url = $mozuUrl->formatUrl("reassignToParent", $reassignToParent);
		return $mozuUrl;
	}
	
}

?>

