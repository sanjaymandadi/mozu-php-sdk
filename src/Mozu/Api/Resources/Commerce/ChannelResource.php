<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\Clients\Commerce\ChannelClient;
use Mozu\Api\ApiContext;


/**
* Use the Channels resource to manage the channels a company uses to create logical commercial business divisions based on region or types of sales, such as "US Online," "Amazon," or "EMEA Retail." All orders include a channel association that enables the company to perform financial reporting for each defined channel. Because channels are managed at the tenant level, you must associate all the tenant's sites with a channel. Sites that do not have a defined channel association cannot successfully submit orders.
*/
class ChannelResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of channels defined for a tenant according to any filter or sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return ChannelCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getChannels($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ChannelClient::getChannelsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of channels defined for a tenant according to any filter or sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getChannelsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ChannelClient::getChannelsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the channel specified in the request.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Channel 
	* @deprecated deprecated since version 1.17
	*/
	public function getChannel($code, $responseFields =  null)
	{
		$mozuClient = ChannelClient::getChannelClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the channel specified in the request.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getChannelAsync($code, $responseFields =  null)
	{
		$mozuClient = ChannelClient::getChannelClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new channel that defines a new logical business division to use for financial reporting.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Channel $channel Properties of a channel used to divide a company into logical business divisions, such as "US Retail," "US Online," or "Amazon." All sites and orders are associated with a channel.
	* @return Channel 
	* @deprecated deprecated since version 1.17
	*/
	public function createChannel($channel, $responseFields =  null)
	{
		$mozuClient = ChannelClient::createChannelClient($channel, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new channel that defines a new logical business division to use for financial reporting.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createChannelAsync($channel, $responseFields =  null)
	{
		$mozuClient = ChannelClient::createChannelClient($channel, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more details of a defined channel, including the associated sites.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Channel $channel Properties of a channel used to divide a company into logical business divisions, such as "US Retail," "US Online," or "Amazon." All sites and orders are associated with a channel.
	* @return Channel 
	* @deprecated deprecated since version 1.17
	*/
	public function updateChannel($channel, $code, $responseFields =  null)
	{
		$mozuClient = ChannelClient::updateChannelClient($channel, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more details of a defined channel, including the associated sites.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateChannelAsync($channel, $code, $responseFields =  null)
	{
		$mozuClient = ChannelClient::updateChannelClient($channel, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a defined channel for the tenant and removes the defined site associations. After deleting this channel, assign its associated sites to another channel.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteChannel($code)
	{
		$mozuClient = ChannelClient::deleteChannelClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a defined channel for the tenant and removes the defined site associations. After deleting this channel, assign its associated sites to another channel.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteChannelAsync($code)
	{
		$mozuClient = ChannelClient::deleteChannelClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

