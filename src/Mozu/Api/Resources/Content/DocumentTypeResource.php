<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\DocumentTypeClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Document Types resource to view the document types supplied by the Content API.
*/
class DocumentTypeResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a paged list of the system-defined document types.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return DocumentTypeCollection 
	*/
	public function getDocumentTypes($dataViewMode, $pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = DocumentTypeClient::getDocumentTypesClient($dataViewMode, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a system-defined document type.
	*
	* @param string $documentTypeName The name of the document type to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DocumentType 
	*/
	public function getDocumentType($dataViewMode, $documentTypeName, $responseFields =  null)
	{
		$mozuClient = DocumentTypeClient::getDocumentTypeClient($dataViewMode, $documentTypeName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentType $documentType 
	* @return DocumentType 
	*/
	public function createDocumentType($dataViewMode, $documentType, $responseFields =  null)
	{
		$mozuClient = DocumentTypeClient::createDocumentTypeClient($dataViewMode, $documentType, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $documentTypeName 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentType $documentType 
	* @return DocumentType 
	*/
	public function updateDocumentType($documentType, $documentTypeName, $responseFields =  null)
	{
		$mozuClient = DocumentTypeClient::updateDocumentTypeClient($documentType, $documentTypeName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

