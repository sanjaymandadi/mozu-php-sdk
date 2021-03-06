<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\AppDev;



/**
*	Metadata associated with a folder in a package of files for an application version.
*/
class FolderMetadata
{
	/**
	*The directory of the file location of the folder in the package.
	*/
	public $fullPath;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Array list of files in the folder.
	*/
	public $files;

	/**
	*Array list of subfolders stored in this folder.
	*/
	public $subFolders;

}

?>
