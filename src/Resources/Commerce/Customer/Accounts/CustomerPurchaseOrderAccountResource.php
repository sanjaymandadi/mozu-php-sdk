<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerPurchaseOrderAccountClient;
use Mozu\Api\ApiContext;


/**
* commerce/customer/accounts/purchaseOrder related resources. DOCUMENT_HERE 
*/
class CustomerPurchaseOrderAccountResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* accounts-purchaseOrder Get GetCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return CustomerPurchaseOrderAccount 
	* @deprecated deprecated since version 1.17
	*/
	public function getCustomerPurchaseOrderAccount($accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::getCustomerPurchaseOrderAccountClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* accounts-purchaseOrder Get GetCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCustomerPurchaseOrderAccountAsync($accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::getCustomerPurchaseOrderAccountClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* accounts-purchaseOrder Get GetCustomerPurchaseOrderTransactions description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter 
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return PurchaseOrderTransactionCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCustomerPurchaseOrderTransactions($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::getCustomerPurchaseOrderTransactionsClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* accounts-purchaseOrder Get GetCustomerPurchaseOrderTransactions description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter 
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCustomerPurchaseOrderTransactionsAsync($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::getCustomerPurchaseOrderTransactionsClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* accounts-purchaseOrder Post CreateCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CustomerPurchaseOrderAccount $customerPurchaseOrderAccount Mozu.Customer.Contracts.CustomerPurchaseOrderAccount ApiType DOCUMENT_HERE 
	* @return CustomerPurchaseOrderAccount 
	* @deprecated deprecated since version 1.17
	*/
	public function createCustomerPurchaseOrderAccount($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::createCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* accounts-purchaseOrder Post CreateCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createCustomerPurchaseOrderAccountAsync($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::createCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* accounts-purchaseOrder Post CreatePurchaseOrderTransaction description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PurchaseOrderTransaction $purchaseOrderTransaction Mozu.Customer.Contracts.PurchaseOrderTransaction ApiType DOCUMENT_HERE 
	* @return PurchaseOrderTransaction 
	* @deprecated deprecated since version 1.17
	*/
	public function createPurchaseOrderTransaction($purchaseOrderTransaction, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::createPurchaseOrderTransactionClient($purchaseOrderTransaction, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* accounts-purchaseOrder Post CreatePurchaseOrderTransaction description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createPurchaseOrderTransactionAsync($purchaseOrderTransaction, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::createPurchaseOrderTransactionClient($purchaseOrderTransaction, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* accounts-purchaseOrder Put UpdateCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CustomerPurchaseOrderAccount $customerPurchaseOrderAccount Mozu.Customer.Contracts.CustomerPurchaseOrderAccount ApiType DOCUMENT_HERE 
	* @return CustomerPurchaseOrderAccount 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCustomerPurchaseOrderAccount($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::updateCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* accounts-purchaseOrder Put UpdateCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateCustomerPurchaseOrderAccountAsync($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::updateCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* accounts-purchaseOrder Delete DeleteCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCustomerPurchaseOrderAccount($accountId)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::deleteCustomerPurchaseOrderAccountClient($accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* accounts-purchaseOrder Delete DeleteCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteCustomerPurchaseOrderAccountAsync($accountId)
	{
		$mozuClient = CustomerPurchaseOrderAccountClient::deleteCustomerPurchaseOrderAccountClient($accountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

