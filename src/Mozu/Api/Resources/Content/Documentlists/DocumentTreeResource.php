<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\Documentlists\DocumentTreeClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the document tree subresource to retrieve documents and manage content within the document hierarchy.
*/
class DocumentTreeResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieve the content associated with the document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @return Stream 
	*/
	public function getTreeDocumentContent($dataViewMode, $documentListName, $documentName)
	{
		$mozuClient = DocumentTreeClient::getTreeDocumentContentClient($dataViewMode, $documentListName, $documentName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a document based on its document list and folder path in the document hierarchy.
	*
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Document 
	*/
	public function getTreeDocument($dataViewMode, $documentListName, $documentName, $responseFields =  null)
	{
		$mozuClient = DocumentTreeClient::getTreeDocumentClient($dataViewMode, $documentListName, $documentName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the content associated with a document, such as a product image or PDF specifications file, based on the document's position in the document hierarchy.
	*
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @param Stream $stream Input output stream that delivers information.
	*/
	public function updateTreeDocumentContent($stream, $documentListName, $documentName, $contentType= null)
	{
		$mozuClient = DocumentTreeClient::updateTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @param Stream $stream Input output stream that delivers information.
	*/
	public function deleteTreeDocumentContent($stream, $documentListName, $documentName, $contentType= null)
	{
		$mozuClient = DocumentTreeClient::deleteTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

