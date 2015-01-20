<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\ApplicationClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Applications resource to update and retrieve details about the applications installed for your tenant.
*/
class ApplicationResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the details of the installed application specified in the request.
	*
	* @param string $appId The application ID that represents the application to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Application 
	*/
	public function getApplication($appId, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getApplicationClient($appId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of the application specified in the request.
	*
	* @param string $appId The application ID that represents the application to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Application $application Properties of the application to update.
	* @return Application 
	*/
	public function updateApplication($application, $appId, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::updateApplicationClient($application, $appId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

