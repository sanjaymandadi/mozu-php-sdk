<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Developer;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ApplicationVersionUrl  {

	/**
		* Get Resource Url for GetAllApplications
		* @return string Resource Url
	*/
	public static function getAllApplicationsUrl()
	{
		$url = "/api/platform/developer/applications/";
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetApplication
		* @param int $applicationId 
		* @return string Resource Url
	*/
	public static function getApplicationUrl($applicationId)
	{
		$url = "/api/platform/developer/applications/{applicationId}";
		$url = MozuUrl::formatUrl($url, "applicationId", $applicationId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetApplicationVersion
		* @param int $applicationVersionId 
		* @return string Resource Url
	*/
	public static function getApplicationVersionUrl($applicationVersionId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPackages
		* @param int $applicationVersionId 
		* @return string Resource Url
	*/
	public static function getPackagesUrl($applicationVersionId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPackage
		* @param int $applicationVersionId 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function getPackageUrl($applicationVersionId, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPackageItemsMetadata
		* @param int $applicationVersionId 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function getPackageItemsMetadataUrl($applicationVersionId, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/files";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPackageItemMetadata
		* @param int $applicationVersionId 
		* @param string $itempath 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function getPackageItemMetadataUrl($applicationVersionId, $itempath, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/files/{*itempath}";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "itempath", $itempath);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPackageFilesZip
		* @param int $applicationVersionId 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function getPackageFilesZipUrl($applicationVersionId, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/zip";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddPackage
		* @param int $applicationVersionId 
		* @return string Resource Url
	*/
	public static function addPackageUrl($applicationVersionId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for AddPackageFile
		* @param int $applicationVersionId 
		* @param string $filepath 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function addPackageFileUrl($applicationVersionId, $filepath, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/files/{*filepath}";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "filepath", $filepath);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for ChangePackageFileNameOrPath
		* @param int $applicationVersionId 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function changePackageFileNameOrPathUrl($applicationVersionId, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/files/change-name-or-path";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdatePackageFile
		* @param int $applicationVersionId 
		* @param string $filepath 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function updatePackageFileUrl($applicationVersionId, $filepath, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/files/{*filepath}";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "filepath", $filepath);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeletePackageFile
		* @param int $applicationVersionId 
		* @param string $filepath 
		* @param int $packageId 
		* @return string Resource Url
	*/
	public static function deletePackageFileUrl($applicationVersionId, $filepath, $packageId)
	{
		$url = "/api/platform/developer/applications/applicationVersions/{applicationVersionId}/packages/{packageId}/files/{*filepath}";
		$url = MozuUrl::formatUrl($url, "applicationVersionId", $applicationVersionId);
		$url = MozuUrl::formatUrl($url, "filepath", $filepath);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"DELETE") ;
	}
	
}

?>
