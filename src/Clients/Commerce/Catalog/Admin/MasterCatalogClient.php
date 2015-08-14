<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\MasterCatalogUrl;


/**
* Use the Master Catalog resource to view details of the master catalogs associated with a tenant and to manage the product publishing mode for each master catalog.
*/
class MasterCatalogClient {

	/**
	* Retrieve the details of all master catalog associated with a tenant.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getMasterCatalogsClient($responseFields =  null)
	{
		$url = MasterCatalogUrl::getMasterCatalogsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieve the details of the master catalog specified in the request.
	*
	* @param int $masterCatalogId The unique identifier of the master catalog associated with the entity.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getMasterCatalogClient($masterCatalogId, $responseFields =  null)
	{
		$url = MasterCatalogUrl::getMasterCatalogUrl($masterCatalogId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the product publishing mode for the master catalog specified in the request.
	*
	* @param int $masterCatalogId 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param MasterCatalog $masterCatalog Properties of a master product catalog defined for a tenant. All catalogs and sites associated with a master catalog share product definitions.
	* @return MozuClient
	*/
	public static function updateMasterCatalogClient($masterCatalog, $masterCatalogId, $responseFields =  null)
	{
		$url = MasterCatalogUrl::updateMasterCatalogUrl($masterCatalogId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($masterCatalog);
		return $mozuClient;

	}
	
	
}

?>
