<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	Summary properties of an unpublished document draft.
*/
class DocumentDraftSummary
{
	/**
	*Detailed information of the date and time for the active update date for the document draft summary. This data is associated to document and content data.
	*/
	public $activeUpdateDate;

	/**
	*Mozu.Content.Contracts.DocumentDraftSummary activeUpdatedBy ApiTypeMember DOCUMENT_HERE 
	*/
	public $activeUpdatedBy;

	/**
	*The unique identifier for the product catalog. Catalogs are part of a master catalog.
	*/
	public $catalogId;

	/**
	*Fully qualified name of the document type. 
	*/
	public $documentTypeFQN;

	/**
	*Detailed information of the date and time for the draft update date for the document draft summary. This data is associated to document and content data.
	*/
	public $draftUpdateDate;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*The fully qualified name of the document list.
	*/
	public $listFQN;

	/**
	*Unique identifier for the master catalog. 
	*/
	public $masterCatalogId;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Mozu.Content.Contracts.DocumentDraftSummary publishSetCode ApiTypeMember DOCUMENT_HERE 
	*/
	public $publishSetCode;

	/**
	*Whether the draft has been published.
	*/
	public $publishType;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Unique identifier of the user who last modified the item. This value is system-supplied and read-only.
	*/
	public $updatedBy;

}

?>
