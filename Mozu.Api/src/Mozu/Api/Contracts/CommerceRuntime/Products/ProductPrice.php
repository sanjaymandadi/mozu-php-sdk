<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	The price of a product that appears on a storefront after any applied discounts.
*/
class ProductPrice
{
	/**
	*The price the merchant charges for a product on a storefront if no sales price is defined.
	*/
	public $price;
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		return $this;
	}

	/**
	*Current sale price defined for a product on a storefront.
	*/
	public $salePrice;
	public function getSalePrice() {
		return $this->salePrice;
	}
	
	public function setSalePrice($salePrice) {
		$this->salePrice = $salePrice;
		return $this;
	}

		public $tenantOverridePrice;
	public function getTenantOverridePrice() {
		return $this->tenantOverridePrice;
	}
	
	public function setTenantOverridePrice($tenantOverridePrice) {
		$this->tenantOverridePrice = $tenantOverridePrice;
		return $this;
	}

}

?>