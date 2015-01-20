<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	Properties of a customer visit to one of a company's sites.
*/
class Visit
{
	/**
	*The date and time of the customer visit.
	*/
	public $date;

	/**
	*Unique identifier of the customer visit.
	*/
	public $id;

	/**
	*If the customer visit is made in person and associated with a defined location, the code that identifies the location.
	*/
	public $locationCode;

	/**
	*The type of customer visit, which is "Website," "Store," "Call," or "Unknown."
	*/
	public $type;

	/**
	*The user ID of the customer who visited the site.
	*/
	public $userId;

	/**
	*The HTTP_Referrer that initiatied the visit started. If the shopper was not referred from another source, this value is null.
	*/
	public $webReferrer;

	/**
	*If the visit was made online, the identifier of the web session associated with the visit, which is system-supplied and read only.
	*/
	public $webSessionId;

	/**
	*Unique identifier of the site.
	*/
	public $webSiteId;

	/**
	*The user agent string for the browser.
	*/
	public $webUserAgent;

	/**
	*Unique identifier of the customer account associated with the visit.
	*/
	public $accountId;

	/**
	*If the customer visit is made online, the location code associated with the website visited.
	*/
	public $browserLocationCode;

	/**
	*Array list of transactions the customer performed during the visit. A customer can perform multiple transactions in a single visit, or the visit can have no associated transactions.
	*/
	public $transactions;

}

?>
