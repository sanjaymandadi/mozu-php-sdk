<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\SearchClient;
use Mozu\Api\ApiContext;


/**
* The Search resource manages all settings and options for providing product search on your site.
*/
class SearchResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the details of the specified search tuning rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @return SearchTuningRule 
	* @deprecated deprecated since version 1.17
	*/
	public function getSearchTuningRule($searchTuningRuleCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSearchTuningRuleClient($searchTuningRuleCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified search tuning rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSearchTuningRuleAsync($searchTuningRuleCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSearchTuningRuleClient($searchTuningRuleCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-search Get GetSearchTuningRules description DOCUMENT_HERE 
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return SearchTuningRuleCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getSearchTuningRules($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSearchTuningRulesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-search Get GetSearchTuningRules description DOCUMENT_HERE 
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSearchTuningRulesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSearchTuningRulesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-search Get GetSearchTuningRuleSortFields description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return SearchTuningRuleSortFields 
	* @deprecated deprecated since version 1.17
	*/
	public function getSearchTuningRuleSortFields($responseFields =  null)
	{
		$mozuClient = SearchClient::getSearchTuningRuleSortFieldsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-search Get GetSearchTuningRuleSortFields description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSearchTuningRuleSortFieldsAsync($responseFields =  null)
	{
		$mozuClient = SearchClient::getSearchTuningRuleSortFieldsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Get site search settings
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return SearchSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function getSettings($responseFields =  null)
	{
		$mozuClient = SearchClient::getSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Get site search settings
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSettingsAsync($responseFields =  null)
	{
		$mozuClient = SearchClient::getSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a collection of synonyms definitions for product searches. Synonyms aid with determining matches for entered searches.
	*
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return SynonymDefinitionCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getSynonymDefinitionCollection($localeCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSynonymDefinitionCollectionClient($localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of synonyms definitions for product searches. Synonyms aid with determining matches for entered searches.
	*
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSynonymDefinitionCollectionAsync($localeCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSynonymDefinitionCollectionClient($localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return SynonymDefinitionPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getSynonymDefinitions($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSynonymDefinitionsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSynonymDefinitionsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSynonymDefinitionsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param int $synonymId 
	* @return SynonymDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function getSynonymDefinition($synonymId, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSynonymDefinitionClient($synonymId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @param int $synonymId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getSynonymDefinitionAsync($synonymId, $responseFields =  null)
	{
		$mozuClient = SearchClient::getSynonymDefinitionClient($synonymId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-search Post AddSearchTuningRule description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SearchTuningRule $searchTuningRuleIn Mozu.ProductAdmin.Contracts.Search.SearchTuningRule ApiType DOCUMENT_HERE 
	* @return SearchTuningRule 
	* @deprecated deprecated since version 1.17
	*/
	public function addSearchTuningRule($searchTuningRuleIn, $responseFields =  null)
	{
		$mozuClient = SearchClient::addSearchTuningRuleClient($searchTuningRuleIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-search Post AddSearchTuningRule description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addSearchTuningRuleAsync($searchTuningRuleIn, $responseFields =  null)
	{
		$mozuClient = SearchClient::addSearchTuningRuleClient($searchTuningRuleIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-search Post UpdateSearchTuningRuleSortFields description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SearchTuningRuleSortFields $searchTuningRuleSortFieldsIn Mozu.ProductAdmin.Contracts.Search.SearchTuningRuleSortFields ApiType DOCUMENT_HERE 
	* @return SearchTuningRuleSortFields 
	* @deprecated deprecated since version 1.17
	*/
	public function updateSearchTuningRuleSortFields($searchTuningRuleSortFieldsIn, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSearchTuningRuleSortFieldsClient($searchTuningRuleSortFieldsIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-search Post UpdateSearchTuningRuleSortFields description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateSearchTuningRuleSortFieldsAsync($searchTuningRuleSortFieldsIn, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSearchTuningRuleSortFieldsClient($searchTuningRuleSortFieldsIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates synonym definitions for product searches. Synonyms aid with determining matches for entered searches.
	*
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SynonymDefinitionCollection $collection Collection of synonym definitions used for determining search results.
	* @return SynonymDefinitionCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function updateSynonymDefinitionCollection($collection, $localeCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSynonymDefinitionCollectionClient($collection, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates synonym definitions for product searches. Synonyms aid with determining matches for entered searches.
	*
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateSynonymDefinitionCollectionAsync($collection, $localeCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSynonymDefinitionCollectionClient($collection, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SynonymDefinition $synonymDefinition 
	* @return SynonymDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function addSynonymDefinition($synonymDefinition, $responseFields =  null)
	{
		$mozuClient = SearchClient::addSynonymDefinitionClient($synonymDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addSynonymDefinitionAsync($synonymDefinition, $responseFields =  null)
	{
		$mozuClient = SearchClient::addSynonymDefinitionClient($synonymDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-search Put UpdateSearchTuningRule description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @param SearchTuningRule $searchTuningRuleIn Mozu.ProductAdmin.Contracts.Search.SearchTuningRule ApiType DOCUMENT_HERE 
	* @return SearchTuningRule 
	* @deprecated deprecated since version 1.17
	*/
	public function updateSearchTuningRule($searchTuningRuleIn, $searchTuningRuleCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSearchTuningRuleClient($searchTuningRuleIn, $searchTuningRuleCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-search Put UpdateSearchTuningRule description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateSearchTuningRuleAsync($searchTuningRuleIn, $searchTuningRuleCode, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSearchTuningRuleClient($searchTuningRuleIn, $searchTuningRuleCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds or Updates (Upsert) the Search Settings for a specific site
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SearchSettings $settings The settings to control product search and indexing behavior.
	* @return SearchSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function updateSettings($settings, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSettingsClient($settings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds or Updates (Upsert) the Search Settings for a specific site
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateSettingsAsync($settings, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSettingsClient($settings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param int $synonymId 
	* @param SynonymDefinition $synonymDefinition 
	* @return SynonymDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function updateSynonymDefinition($synonymDefinition, $synonymId, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSynonymDefinitionClient($synonymDefinition, $synonymId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @param int $synonymId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateSynonymDefinitionAsync($synonymDefinition, $synonymId, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSynonymDefinitionClient($synonymDefinition, $synonymId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified search tuning rule.
	*
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteSearchTuningRule($searchTuningRuleCode)
	{
		$mozuClient = SearchClient::deleteSearchTuningRuleClient($searchTuningRuleCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified search tuning rule.
	*
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteSearchTuningRuleAsync($searchTuningRuleCode)
	{
		$mozuClient = SearchClient::deleteSearchTuningRuleClient($searchTuningRuleCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $synonymId 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteSynonymDefinition($synonymId)
	{
		$mozuClient = SearchClient::deleteSynonymDefinitionClient($synonymId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* 
	*
	* @param int $synonymId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteSynonymDefinitionAsync($synonymId)
	{
		$mozuClient = SearchClient::deleteSynonymDefinitionClient($synonymId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

