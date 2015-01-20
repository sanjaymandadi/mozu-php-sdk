<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerNoteUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Tenant administrators can add and view internal notes for a customer account. For example, a client can track a shopper's interests or complaints. Only clients can add and view notes. Shoppers cannot view these notes from the My Account page.
*/
class CustomerNoteClient {

	/**
	* Retrieves the contents of a particular note attached to a specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account that contains the note being retrieved.
	* @param int $noteId Unique identifier of a particular note to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAccountNoteClient($accountId, $noteId, $responseFields =  null)
	{
		$url = CustomerNoteUrl::getAccountNoteUrl($accountId, $noteId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of notes added to a customer account according to any specified filter criteria and sort options.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getAccountNotesClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CustomerNoteUrl::getAccountNotesUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new note to the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account for which to create the note.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerNote $note Properties of the customer account note to create.
	* @return MozuClient
	*/
	public static function addAccountNoteClient($note, $accountId, $responseFields =  null)
	{
		$url = CustomerNoteUrl::addAccountNoteUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($note);
		return $mozuClient;

	}
	
	/**
	* Modifies an existing note for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account note to modify.
	* @param int $noteId Unique identifier of the note to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerNote $note The new content to replace the existing note.
	* @return MozuClient
	*/
	public static function updateAccountNoteClient($note, $accountId, $noteId, $responseFields =  null)
	{
		$url = CustomerNoteUrl::updateAccountNoteUrl($accountId, $noteId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($note);
		return $mozuClient;

	}
	
	/**
	* Removes a note from the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account that contains the note being deleted.
	* @param int $noteId Unique identifier of the customer account note being deleted.
	*/
	public static function deleteAccountNoteClient($accountId, $noteId)
	{
		$url = CustomerNoteUrl::deleteAccountNoteUrl($accountId, $noteId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

