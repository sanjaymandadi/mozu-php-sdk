<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Shipping;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\Shipping\ContactClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use this subresource to manage the physical address from which shipments for this site will originate.
*/
class ContactResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the physical address from which shipments originate from the site's shipping settings.
	*
	* @return Contact 
	*/
	public function getShippingOriginAddress()
	{
		$mozuClient = ContactClient::getShippingOriginAddressClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates the site's shipping origin address as it appears in shipping settings.
	*
	* @param Contact $siteShippingOriginAddress New shipping origin address to create. Required properties: SiteShippingOriginAddress.Sender Name, .Address1, .CityOrTown, .StateOrProvince, .PostalOrZipCode, .Country.
	* @return Contact 
	*/
	public function createShippingOriginAddress($siteShippingOriginAddress)
	{
		$mozuClient = ContactClient::createShippingOriginAddressClient($siteShippingOriginAddress);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the site's shipping origin address as it appears in shipping settings.
	*
	* @param Contact $siteShippingOriginAddress Properties of the site's shipping origin address. Required properties: SiteShippingOriginAddress.Sender Name, .Address1, .CityOrTown, .StateOrProvince, .PostalOrZipCode, .Country.
	* @return Contact 
	*/
	public function updateShippingOriginAddress($siteShippingOriginAddress)
	{
		$mozuClient = ContactClient::updateShippingOriginAddressClient($siteShippingOriginAddress);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>
