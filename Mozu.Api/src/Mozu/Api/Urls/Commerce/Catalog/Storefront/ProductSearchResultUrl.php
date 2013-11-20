<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Storefront;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductSearchResultUrl  {

	/**
		* Get Resource Url for Search
		* @param string $facet Individually list the facet fields you want to display in a storefront product search.
		* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a storefront product search by listing the facet field and the range to display.
		* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
		* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
		* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
		* @param string $facetPageSize The number of facet values to return for one or more facets.
		* @param string $facetSettings Settings reserved for future facet search functionality on a storefront product search.
		* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
		* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the storefront product search. Currently, only category-level facet templates are available.
		* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
		* @param string $facetValueFilter The facet values to apply to the filter.
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product search results by any of its properties, including product code, type, category, and name. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=categoryId+eq+12"</b>
		* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
		* @param string $query The terms to search on.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function searchUrl($facet, $facetFieldRangeQuery, $facetHierDepth, $facetHierPrefix, $facetHierValue, $facetPageSize, $facetSettings, $facetStartIndex, $facetTemplate, $facetTemplateSubset, $facetValueFilter, $filter, $pageSize, $query, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/searchz/?query={query}&filter={filter}&facetTemplate={facetTemplate}&facetTemplateSubset={facetTemplateSubset}&facet={facet}&facetFieldRangeQuery={facetFieldRangeQuery}&facetHierPrefix={facetHierPrefix}&facetHierValue={facetHierValue}&facetHierDepth={facetHierDepth}&facetStartIndex={facetStartIndex}&facetPageSize={facetPageSize}&facetSettings={facetSettings}&facetValueFilter={facetValueFilter}&sortBy={sortBy}&pageSize={pageSize}&startIndex={startIndex}";
		$url = MozuUrl::formatUrl($url, "facet", $facet);
		$url = MozuUrl::formatUrl($url, "facetFieldRangeQuery", $facetFieldRangeQuery);
		$url = MozuUrl::formatUrl($url, "facetHierDepth", $facetHierDepth);
		$url = MozuUrl::formatUrl($url, "facetHierPrefix", $facetHierPrefix);
		$url = MozuUrl::formatUrl($url, "facetHierValue", $facetHierValue);
		$url = MozuUrl::formatUrl($url, "facetPageSize", $facetPageSize);
		$url = MozuUrl::formatUrl($url, "facetSettings", $facetSettings);
		$url = MozuUrl::formatUrl($url, "facetStartIndex", $facetStartIndex);
		$url = MozuUrl::formatUrl($url, "facetTemplate", $facetTemplate);
		$url = MozuUrl::formatUrl($url, "facetTemplateSubset", $facetTemplateSubset);
		$url = MozuUrl::formatUrl($url, "facetValueFilter", $facetValueFilter);
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "query", $query);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for Suggest
		* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
		* @param string $q Text that the shopper is currently entering.
		* @return string Resource Url
	*/
	public static function suggestUrl($pageSize, $q)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/suggest?q={q}&pageSize={pageSize}";
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "q", $q);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
}

?>
