<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\MZDB;



/**
*	The definition of an MZDB EntityList which describes the characteristics of the EntityList on a per tenant basis. EntityLists are created at the tenant level, but instances of the EntityLists are implicitly created at the appropriate context level as entities are added or removed from the EntityList.
*/
class EntityList
{
	/**
	*At which context level are entities stored in the list. Possible values are "tenant", "site", "masterCatalog" or "catalog".  Each list instance will exist at this context level for the tenant.
	*/
	public $contextLevel;

	/**
	*The date time in UTC format set when the object was created. 
	*/
	public $createDate;

	/**
	*Indicates whether MZDB should store entities in the EntityList instance specific to the localeCode provided.  If true, all operations on the EntityList will be filtered by the provided localeCode on the request or using the defautLocaleCode for the context.  All entities created in the EntityList will be stored with the localeCode provided on the request or the defautLocaleCode for the context as an additional implicit key. The default value is false.
	*/
	public $isLocaleSpecific;

	/**
	*Indicates whether MZDB should clone all of the Entities in the EntityList when cloning an existing sandbox for which this list is already defined.  The default value is false.
	*/
	public $isSandboxDataCloningSupported;

	/**
	*Indicates whether MZDB should store entities in the EntityList instance specific to the current shopper on the request.  If true, all operations on the EntityList will be filtered by the id of the shopper from the shopper claims provided on the request.  All entities created in the EntityList will be stored with the id of the shopper from the shopper claims provided on the request as an additional implicit key. The default value is false.
	*/
	public $isShopperSpecific;

	/**
	*Indicates whether Enitities in the EntityList are allowed to be accessed from a Mozu storefront.
	*/
	public $isVisibleInStorefront;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*If applicable, the registered namespace associated with objects, used to generate the fully qualified name. If no namespace is defined, the namespace associated with the tenant is automatically assigned.
	*/
	public $nameSpace;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*The date and time the object was updated most recently. The date is in UTC format.
	*/
	public $updateDate;

	/**
	*List description of usages for content within a view and scope.
	*/
	public $usages;

	/**
	*Indicates whether or not Mozu should assign a generated identifier for each entity in the list or whether a unique identifier will be provided for each identity. If set to false, then a value must be provided for the IdProperty for the list.
	*/
	public $useSystemAssignedId;

	/**
	*An IndexedProperty defintion which indicates the property on every entity provided should be used as the unique identifier for the document. Within an EntityList instance each entity must have a unique identifier.
	*/
	public $idProperty;

	/**
	*An IndexedProperty defintion which indicates a property on every entity provided that should be indexed to enable querying and sorting.  Non-indexed properties may be used in queries as long as at least one indexed property is also provided in the query.
	*/
	public $indexA;

	/**
	*An IndexedProperty defintion which indicates a property on every entity provided that should be indexed to enable querying and sorting.  Non-indexed properties may be used in queries as long as at least one indexed property is also provided in the query.
	*/
	public $indexB;

	/**
	*An IndexedProperty defintion which indicates a property on every entity provided that should be indexed to enable querying and sorting.  Non-indexed properties may be used in queries as long as at least one indexed property is also provided in the query.
	*/
	public $indexC;

	/**
	*An IndexedProperty defintion which indicates a property on every entity provided that should be indexed to enable querying and sorting.  Non-indexed properties may be used in queries as long as at least one indexed property is also provided in the query.
	*/
	public $indexD;

	/**
	*Metadata content for entities, used by document lists, document type lists, document type, views, entity lists, and list views.
	*/
	public $metadata;

	/**
	*The view in the site used by associated entities or document lists/list types.
	*/
	public $views;

}

?>
