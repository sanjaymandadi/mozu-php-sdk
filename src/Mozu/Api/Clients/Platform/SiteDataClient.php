<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\SiteDataUrl;


/**
* Use the site data resource to store site-level information required for a third-party application in the Mozu database.
*/
class SiteDataClient {

	/**
	* Retrieves the value of a record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getDBValueClient($dbEntryQuery, $responseFields =  null)
	{
		$url = SiteDataUrl::getDBValueUrl($dbEntryQuery, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public static function createDBValueClient($value, $dbEntryQuery)
	{
		$url = SiteDataUrl::createDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* Updates a record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public static function updateDBValueClient($value, $dbEntryQuery)
	{
		$url = SiteDataUrl::updateDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* Removes a previously defined record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	*/
	public static function deleteDBValueClient($dbEntryQuery)
	{
		$url = SiteDataUrl::deleteDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

