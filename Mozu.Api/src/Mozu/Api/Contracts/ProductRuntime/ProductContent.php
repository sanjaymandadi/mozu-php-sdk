<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	Content associated with a product definition that can be localized.
*/
class ProductContent
{
	/**
	*Description defined for the metadata used to internally manage information about the product.
	*/
	public $metaTagDescription;
	public function getMetaTagDescription() {
		return $this->metaTagDescription;
	}
	
	public function setMetaTagDescription($metaTagDescription) {
		$this->metaTagDescription = $metaTagDescription;
		return $this;
	}

	/**
	*Keywords defined for the metadata used to internally manage information about the product.
	*/
	public $metaTagKeywords;
	public function getMetaTagKeywords() {
		return $this->metaTagKeywords;
	}
	
	public function setMetaTagKeywords($metaTagKeywords) {
		$this->metaTagKeywords = $metaTagKeywords;
		return $this;
	}

	/**
	*Title defined for the metadata used to internally manage information about the product.
	*/
	public $metaTagTitle;
	public function getMetaTagTitle() {
		return $this->metaTagTitle;
	}
	
	public function setMetaTagTitle($metaTagTitle) {
		$this->metaTagTitle = $metaTagTitle;
		return $this;
	}

	/**
	*Full description of the product, which typically appears on the product details page.
	*/
	public $productFullDescription;
	public function getProductFullDescription() {
		return $this->productFullDescription;
	}
	
	public function setProductFullDescription($productFullDescription) {
		$this->productFullDescription = $productFullDescription;
		return $this;
	}

	/**
	*The descriptive brief product name.
	*/
	public $productName;
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		return $this;
	}

	/**
	*Brief description of the product typically used when the product is displayed in a list or in search results.
	*/
	public $productShortDescription;
	public function getProductShortDescription() {
		return $this->productShortDescription;
	}
	
	public function setProductShortDescription($productShortDescription) {
		$this->productShortDescription = $productShortDescription;
		return $this;
	}

	/**
	*Product URL defined for search engine optimization.
	*/
	public $seofriendlyUrl;
	public function getSeofriendlyUrl() {
		return $this->seofriendlyUrl;
	}
	
	public function setSeofriendlyUrl($seofriendlyUrl) {
		$this->seofriendlyUrl = $seofriendlyUrl;
		return $this;
	}

	/**
	*List of image files associated with the product.
	*/
	public $productImages;
	public function getProductImages() {
		return $this->productImages;
	}
	
	public function setProductImages($productImages) {
		$this->productImages = $productImages;
		return $this;
	}

}

?>