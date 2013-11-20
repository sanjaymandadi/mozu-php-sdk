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
*	The price of the product in the specified currency code (USD). This price can either be the sale price or the price for which the merchang intends to sell the product.
*/
class ProductPrice
{
	/**
	*The price the merchant intends to charge for the product.
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
	*The sale price defined for the product.
	*/
	public $salePrice;
	public function getSalePrice() {
		return $this->salePrice;
	}
	
	public function setSalePrice($salePrice) {
		$this->salePrice = $salePrice;
		return $this;
	}

	/**
	*The discount applied to the product price.
	*/
	public $discount;
	public function getDiscount() {
		return $this->discount;
	}
	
	public function setDiscount($discount) {
		$this->discount = $discount;
		return $this;
	}

}

?>