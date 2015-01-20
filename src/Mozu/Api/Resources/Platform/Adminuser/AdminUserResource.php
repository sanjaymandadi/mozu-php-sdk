<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Adminuser;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\Adminuser\AdminUserClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Displays the user accounts and account details associated with a developer or Mozu tenant administrator. Email addresses uniquely identify admin user accounts.
*/
class AdminUserResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the Mozu tenants or development stores for which the specified user has an assigned role.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return TenantCollection 
	*/
	public function getTenantScopesForUser($userId, $responseFields =  null)
	{
		$mozuClient = AdminUserClient::getTenantScopesForUserClient($userId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of the specified administrator user account.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the administrator account to retrieve.
	* @return User 
	*/
	public function getUser($userId, $responseFields =  null)
	{
		$mozuClient = AdminUserClient::getUserClient($userId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

