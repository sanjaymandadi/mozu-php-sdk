<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\CategoryUrl;


/**
* Use the Categories resource to organize products and control where they appear on the storefront. Create and maintain a hierarchy of categories and subcategories where the site will store properties.
*/
class CategoryClient {

	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query: eq=equals, ne=not equals, gt=greater than, lt = less than or equals, gt = greater than or equals, lt = less than or equals, sw = starts with, or cont = contains. Optional.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getCategoriesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CategoryUrl::getCategoriesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the list of subcategories within a category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getChildCategoriesClient($categoryId, $responseFields =  null)
	{
		$url = CategoryUrl::getChildCategoriesUrl($categoryId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCategoryClient($categoryId, $responseFields =  null)
	{
		$url = CategoryUrl::getCategoryUrl($categoryId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new category to the site's category hierarchy. Specify a ParentCategoryID to determine where to place the category in the hierarchy. If no ParentCategoryID is specified, the new category is a top-level category.
	*
	* @param bool $incrementSequence If true, when adding a new product category, set the sequence number of the new category to an increment of one integer greater than the maximum available sequence number across all product categories. If false, set the sequence number to zero.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Category $category A descriptive container that groups products. A category is merchant defined with associated products and discounts as configured. GThe storefront displays products in a hierarchy of categories. As such, categories can include a nesting of sub-categories to organize products and product options per set guidelines such as color, brand, material, and size.
	* @return MozuClient
	*/
	public static function addCategoryClient($category, $incrementSequence =  null, $responseFields =  null)
	{
		$url = CategoryUrl::addCategoryUrl($incrementSequence, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($category);
		return $mozuClient;

	}
	
	/**
	* Update the properties of a defined category or move it to another location in the category hierarchy. Because this operation replaces the defined resource,include all the information to maintain for the category in the request.
	*
	* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. Default: False.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Category $category A descriptive container that groups products. A category is merchant defined with associated products and discounts as configured. GThe storefront displays products in a hierarchy of categories. As such, categories can include a nesting of sub-categories to organize products and product options per set guidelines such as color, brand, material, and size.
	* @return MozuClient
	*/
	public static function updateCategoryClient($category, $categoryId, $cascadeVisibility =  null, $responseFields =  null)
	{
		$url = CategoryUrl::updateCategoryUrl($cascadeVisibility, $categoryId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($category);
		return $mozuClient;

	}
	
	/**
	* Deletes the category specified by its category ID.
	*
	* @param bool $cascadeDelete If true, also delete all subcategories associated with the specified category.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param bool $forceDelete 
	* @param bool $reassignToParent 
	*/
	public static function deleteCategoryByIdClient($categoryId, $cascadeDelete =  null, $forceDelete =  null, $reassignToParent =  null)
	{
		$url = CategoryUrl::deleteCategoryByIdUrl($cascadeDelete, $categoryId, $forceDelete, $reassignToParent);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
