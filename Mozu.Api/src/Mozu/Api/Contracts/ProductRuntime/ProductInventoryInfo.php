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



class ProductInventoryInfo
{
		public $manageStock;
	public function getManageStock() {
		return $this->manageStock;
	}
	
	public function setManageStock($manageStock) {
		$this->manageStock = $manageStock;
		return $this;
	}

		public $onlineStockAvailable;
	public function getOnlineStockAvailable() {
		return $this->onlineStockAvailable;
	}
	
	public function setOnlineStockAvailable($onlineStockAvailable) {
		$this->onlineStockAvailable = $onlineStockAvailable;
		return $this;
	}

		public $outOfStockBehavior;
	public function getOutOfStockBehavior() {
		return $this->outOfStockBehavior;
	}
	
	public function setOutOfStockBehavior($outOfStockBehavior) {
		$this->outOfStockBehavior = $outOfStockBehavior;
		return $this;
	}

}

?>