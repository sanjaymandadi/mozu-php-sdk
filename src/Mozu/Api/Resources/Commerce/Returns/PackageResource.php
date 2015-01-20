<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Returns;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Returns\PackageClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Return Packages subresource to manage physical packages used to ship return replacement items.
*/
class PackageResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the package label image supplied by the carrier for a return replacement.
	*
	* @param string $packageId Unique identifier of the return replacement package for which to retrieve the label.
	* @param string $returnId Unique identifier of the return associated with the replacement package label to retrieve.
	* @return Stream 
	*/
	public function getPackageLabel($returnId, $packageId)
	{
		$mozuClient = PackageClient::getPackageLabelClient($returnId, $packageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a package of return replacement items.
	*
	* @param string $packageId Unique identifier of the return replacement package to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return associated with the replacement package to retrieve.
	* @return Package 
	*/
	public function getPackage($returnId, $packageId, $responseFields =  null)
	{
		$mozuClient = PackageClient::getPackageClient($returnId, $packageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new physical package of return replacement items.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return for which to create a replacement package.
	* @param Package $package Properties of the physical package for a return replacement.
	* @return Package 
	*/
	public function createPackage($pkg, $returnId, $responseFields =  null)
	{
		$mozuClient = PackageClient::createPackageClient($pkg, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a package associated with a return replacement.
	*
	* @param string $packageId Unique identifier of the return replacement package to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return associated with the replacement package to update.
	* @param Package $package Properties of the return replacement package to update.
	* @return Package 
	*/
	public function updatePackage($pkg, $returnId, $packageId, $responseFields =  null)
	{
		$mozuClient = PackageClient::updatePackageClient($pkg, $returnId, $packageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a package associated with a return replacement.
	*
	* @param string $packageId Unique identifier of the return replacement package to delete.
	* @param string $returnId Unique identifier of the return associated with the replacement package to delete.
	*/
	public function deletePackage($returnId, $packageId)
	{
		$mozuClient = PackageClient::deletePackageClient($returnId, $packageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

