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
use Mozu\Api\Clients\Platform\Adminuser\TenantAdminUserAuthTicketClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Admin User authentication tickets resource to generate and refresh authentication tickets that enable Mozu administrator or developer account users to access development or production tenants.
*/
class TenantAdminUserAuthTicketResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Creates an authentication ticket for the supplied user to specify in API requests associated with the supplied tenant.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $tenantId Unique identifier of the development or production tenant for which to generate the user authentication ticket.
	* @param UserAuthInfo $userAuthInfo The user authentication information required to generate the user authentication ticket, which consists of a user name and password.
	* @return TenantAdminUserAuthTicket 
	*/
	public function createUserAuthTicket($userAuthInfo, $tenantId =  null, $responseFields =  null)
	{
		$mozuClient = TenantAdminUserAuthTicketClient::createUserAuthTicketClient($userAuthInfo, $tenantId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Generates a new user authentication ticket for the specified tenant by supplying the user's existing refresh token information.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $tenantId 
	* @param TenantAdminUserAuthTicket $existingAuthTicket Properties of the authentication ticket to refresh. The refresh token is required to complete this request.
	* @return TenantAdminUserAuthTicket 
	*/
	public function refreshAuthTicket($existingAuthTicket, $tenantId =  null, $responseFields =  null)
	{
		$mozuClient = TenantAdminUserAuthTicketClient::refreshAuthTicketClient($existingAuthTicket, $tenantId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the authentication ticket for the user by supplying the refresh token.
	*
	* @param string $refreshToken Refresh token string associated with the user authentication ticket.
	*/
	public function deleteUserAuthTicket($refreshToken)
	{
		$mozuClient = TenantAdminUserAuthTicketClient::deleteUserAuthTicketClient($refreshToken);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

