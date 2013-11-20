<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\Documentlists\DocumentClient;
use Mozu\Api\ApiContext;

/**
* Use this subresource to manage documents in a document list.
*/
class DocumentResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Get a specific document within the specified document list by providing the document ID.
	*
	* @param string $documentId Identifier of the document being retrieved.
	* @param string $documentListName The name of the document list associated with the document to retrieve.
	* @return Document 
	*/
	public function getDocument( $documentId,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::getDocumentClient( $documentId,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	*/
	public function getDocumentContent( $documentId,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::getDocumentContentClient( $documentId,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param string $documentListName The name of the document list.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter a document's search results by any of its properties, including its name or folder path. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=Name+sw+Events"</b>
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param string $sortBy "The property by which to sort results and whether the results appear in ascending (a-z) order, represented by 'ASC' or in descending (z-a) order, represented by 'DESC'. The sortBy parameter follows an available property. <b>For example: sortBy=productCode+asc</b>"
	* @param int $startIndex "Used to create paged results from a query. Indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3."
	* @return DocumentCollection 
	*/
	public function getDocuments( $documentListName, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::getDocumentsClient( $documentListName, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new document in an existing list.
	*
	* @param string $documentListName The descriptive alphanumeric document list name being created.
	* @param Document $document The descriptive name of the newly created document.
	* @return Document 
	*/
	public function createDocument($document,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::createDocumentClient($document,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier of the document to update.
	* @param string $documentListName Name of the document list associated with the document.
	* @param Document $document Properties of the document to update.
	* @return Document 
	*/
	public function updateDocument($document,  $documentId,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::updateDocumentClient($document,  $documentId,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @param Stream $stream 
	*/
	public function updateDocumentContent($stream,  $documentId,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::updateDocumentContentClient($stream,  $documentId,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Deletes a specific document based on the specified documentId.
	*
	* @param string $documentId Identifier of the document being deleted.
	* @param string $documentListName The name of the document list associated with the document list being deleted.
	*/
	public function deleteDocument( $documentId,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::deleteDocumentClient( $documentId,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	*/
	public function deleteDocumentContent( $documentId,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DocumentClient::deleteDocumentContentClient( $documentId,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
