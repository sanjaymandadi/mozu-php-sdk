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
use Mozu\Api\Clients\Content\DocumentListTypeClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class DocumentListTypeResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentListType $list 
	* @return DocumentListType 
	*/
	public function createDocumentListType($dataViewMode, $list, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::createDocumentListTypeClient($dataViewMode, $list, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $documentListTypeFQN 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentListType $list 
	* @return DocumentListType 
	*/
	public function updateDocumentListType($list, $documentListTypeFQN, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::updateDocumentListTypeClient($list, $documentListTypeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

