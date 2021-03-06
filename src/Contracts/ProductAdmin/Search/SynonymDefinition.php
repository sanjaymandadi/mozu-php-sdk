<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin\Search;



/**
*	Properties of synonyms and their relations via keys and lists to determine search results.
*/
class SynonymDefinition
{
	/**
	*Key used for metadata defined for objects, including extensible attributes, custom attributes associated with a shipping provider, and search synonyms definitions. This content may be user-defined depending on the object and usage.
	*/
	public $key;

		public $synonymId;

	/**
	*List of synonyms.  If no key is defined the matches are bidirectional
	*/
	public $synonyms;

}

?>
