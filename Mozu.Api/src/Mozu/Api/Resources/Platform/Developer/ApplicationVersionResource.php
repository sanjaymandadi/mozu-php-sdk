<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Developer;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\Developer\ApplicationVersionClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class ApplicationVersionResource {

	/**
	* 
	*
	* @return ApplicationCollection 
	*/
	public function getAllApplications(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getAllApplicationsClient($authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationId 
	* @return Application 
	*/
	public function getApplication($applicationId =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getApplicationClient($applicationId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @return ApplicationVersion 
	*/
	public function getApplicationVersion( $applicationVersionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getApplicationVersionClient( $applicationVersionId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @return PackageCollection 
	*/
	public function getPackages( $applicationVersionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getPackagesClient( $applicationVersionId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param int $packageId 
	* @return Package 
	*/
	public function getPackage( $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getPackageClient( $applicationVersionId,  $packageId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param int $packageId 
	* @return FolderMetadata 
	*/
	public function getPackageItemsMetadata( $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getPackageItemsMetadataClient( $applicationVersionId,  $packageId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param string $itempath 
	* @param int $packageId 
	* @return FileMetadata 
	*/
	public function getPackageItemMetadata( $applicationVersionId,  $itempath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getPackageItemMetadataClient( $applicationVersionId,  $itempath,  $packageId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param int $packageId 
	*/
	public function getPackageFilesZip( $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::getPackageFilesZipClient( $applicationVersionId,  $packageId, $authTicket);
		$mozuClient->execute();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param Package $package 
	* @return Package 
	*/
	public function addPackage($pkg,  $applicationVersionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::addPackageClient($pkg,  $applicationVersionId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param string $filepath 
	* @param int $packageId 
	* @param Stream $stream 
	* @return FileMetadata 
	*/
	public function addPackageFile($stream,  $applicationVersionId,  $filepath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::addPackageFileClient($stream,  $applicationVersionId,  $filepath,  $packageId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param int $packageId 
	* @param RenameInfo $renameInfo 
	* @return FileMetadata 
	*/
	public function changePackageFileNameOrPath($renameInfo,  $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::changePackageFileNameOrPathClient($renameInfo,  $applicationVersionId,  $packageId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param string $filepath 
	* @param int $packageId 
	* @param Stream $stream 
	* @return FileMetadata 
	*/
	public function updatePackageFile($stream,  $applicationVersionId,  $filepath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::updatePackageFileClient($stream,  $applicationVersionId,  $filepath,  $packageId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param string $filepath 
	* @param int $packageId 
	*/
	public function deletePackageFile( $applicationVersionId,  $filepath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ApplicationVersionClient::deletePackageFileClient( $applicationVersionId,  $filepath,  $packageId, $authTicket);
		$mozuClient->execute();

	}
	
	
}

?>

