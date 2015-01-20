<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\CreditClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Customer Credits resource to manage the store credit associated with a customer account. Store credit can represent a static amount the customer can redeem at any of the tenant's sites, or a gift card registered for a customer account. At this time, gift card functionality is reserved for future use.
*/
class CreditResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of store credits applied to customer accounts, according any filter and sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return CreditCollection 
	*/
	public function getCredits($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CreditClient::getCreditsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a store credit applied to a customer account.
	*
	* @param string $code User-defined code that identifies the store credit to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Credit 
	*/
	public function getCredit($code, $responseFields =  null)
	{
		$mozuClient = CreditClient::getCreditClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new store credit for the customer account specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Credit $credit Properties of the store credit to create.
	* @return Credit 
	*/
	public function addCredit($credit, $responseFields =  null)
	{
		$mozuClient = CreditClient::addCreditClient($credit, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Associates an unclaimed customer credit with the shopper user authenticated in the request header.
	*
	* @param string $code The code that represents the credit to claim for the shopper.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Credit 
	*/
	public function associateCreditToShopper($code, $responseFields =  null)
	{
		$mozuClient = CreditClient::associateCreditToShopperClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a defined store credit applied to a customer account.
	*
	* @param string $code User-defined code of the store credit to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Credit $credit Properties of the store credit to update.
	* @return Credit 
	*/
	public function updateCredit($credit, $code, $responseFields =  null)
	{
		$mozuClient = CreditClient::updateCreditClient($credit, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a store credit previously applied to a customer account.
	*
	* @param string $code User-defined code of the store credit to delete.
	*/
	public function deleteCredit($code)
	{
		$mozuClient = CreditClient::deleteCreditClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

