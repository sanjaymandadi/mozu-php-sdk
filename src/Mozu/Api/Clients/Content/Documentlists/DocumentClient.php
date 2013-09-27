<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\Documentlists\DocumentUrl;

/**
* Use this subresource to manage documents in a document list.
*/
class DocumentClient {

	/**
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $publishState The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	*/
	public static function getDocumentContentClient($documentId, $documentListName, $publishState)
	{
		$url = DocumentUrl::getDocumentContentUrl($documentId, $documentListName, $publishState);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a specific document within the specified document list by providing the document ID.
	*
	* @param string $documentId Identifier of the document being retrieved.
	* @param string $documentListName The name of the document list associated with the document to retrieve.
	* @param string $publishState The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	* @return MozuClient
	*/
	public static function getDocumentClient($documentId, $documentListName, $publishState)
	{
		$url = DocumentUrl::getDocumentUrl($documentId, $documentListName, $publishState);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param string $documentListName The name of the document list.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter a document's search results by any of its properties, including its name or folder path. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=Name+sw+Events"</b>
	* @param long $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $publishState The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param long $startIndex Indicates the zero-based offset in the complete result set where the returned entities begin, when creating paged results from a query. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getDocumentsClient($documentListName, $filter, $pageSize, $publishState, $sortBy, $startIndex)
	{
		$url = DocumentUrl::getDocumentsUrl($documentListName, $filter, $pageSize, $publishState, $sortBy, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new document in an existing list.
	*
	* @param string $documentListName The descriptive alphanumeric document list name being created.
	* @param string $publishState The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	* @param Document $document The descriptive name of the newly created document.
	* @return MozuClient
	*/
	public static function createDocumentClient($documentListName, $publishState, $document)
	{
		$url = DocumentUrl::createDocumentUrl($documentListName, $publishState);
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($document);
		return $mozuClient;

	}
	
	/**
	* Updates the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	*/
	public static function updateDocumentContentClient($documentId, $documentListName)
	{
		$url = DocumentUrl::updateDocumentContentUrl($documentId, $documentListName);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier of the document to update.
	* @param string $documentListName Name of the document list associated with the document.
	* @param string $publishState The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	* @param Document $document Properties of the document to update.
	* @return MozuClient
	*/
	public static function updateDocumentClient($documentId, $documentListName, $publishState, $document)
	{
		$url = DocumentUrl::updateDocumentUrl($documentId, $documentListName, $publishState);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($document);
		return $mozuClient;

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	*/
	public static function deleteDocumentContentClient($documentId, $documentListName)
	{
		$url = DocumentUrl::deleteDocumentContentUrl($documentId, $documentListName);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes a specific document based on the specified document ID.
	*
	* @param string $documentId Identifier of the document being deleted.
	* @param string $documentListName The name of the document list associated with the document list being deleted.
	* @param string $publishState The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	*/
	public static function deleteDocumentClient($documentId, $documentListName, $publishState)
	{
		$url = DocumentUrl::deleteDocumentUrl($documentId, $documentListName, $publishState);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
