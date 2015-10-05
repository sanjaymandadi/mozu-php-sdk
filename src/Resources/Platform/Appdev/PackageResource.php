<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Appdev;

use Mozu\Api\Clients\Platform\Appdev\PackageClient;
use Mozu\Api\ApiContext;


/**
* platform/appdev/filebasedpackage related resources. DOCUMENT_HERE 
*/
class PackageResource {

				



	/**
	* appdev-filebasedpackage Get GetFile description DOCUMENT_HERE 
	*
	* @param string $applicationKey 
	* @param string $fileName 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function getFile($applicationKey, $fileName)
	{
		$mozuClient = PackageClient::getFileClient($applicationKey, $fileName);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* appdev-filebasedpackage Get GetFile description DOCUMENT_HERE 
	*
	* @param string $applicationKey 
	* @param string $fileName 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getFileAsync($applicationKey, $fileName)
	{
		$mozuClient = PackageClient::getFileClient($applicationKey, $fileName);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

