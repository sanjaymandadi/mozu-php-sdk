<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Couponsets;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Couponsets\AssignedDiscountClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class AssignedDiscountResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $couponSetCode 
	* @return array|AssignedDiscount 
	* @deprecated deprecated since version 1.17
	*/
	public function getAssignedDiscounts($couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::getAssignedDiscountsClient($couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $couponSetCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAssignedDiscountsAsync($couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::getAssignedDiscountsClient($couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param AssignedDiscount $assignedDiscount 
	* @deprecated deprecated since version 1.17
	*/
	public function assignDiscount($assignedDiscount, $couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::assignDiscountClient($assignedDiscount, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* 
	*
	* @param string $couponSetCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function assignDiscountAsync($assignedDiscount, $couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::assignDiscountClient($assignedDiscount, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param int $discountId 
	* @deprecated deprecated since version 1.17
	*/
	public function unAssignDiscount($couponSetCode, $discountId)
	{
		$mozuClient = AssignedDiscountClient::unAssignDiscountClient($couponSetCode, $discountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* 
	*
	* @param string $couponSetCode 
	* @param int $discountId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function unAssignDiscountAsync($couponSetCode, $discountId)
	{
		$mozuClient = AssignedDiscountClient::unAssignDiscountClient($couponSetCode, $discountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

