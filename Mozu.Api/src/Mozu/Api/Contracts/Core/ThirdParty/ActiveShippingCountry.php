<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\ThirdParty;



class ActiveShippingCountry
{
		public $activeCarriers;
	public function getActiveCarriers() {
		return $this->activeCarriers;
	}
	
	public function setActiveCarriers($activeCarriers) {
		$this->activeCarriers = $activeCarriers;
		return $this;
	}

		public $countryCode;
	public function getCountryCode() {
		return $this->countryCode;
	}
	
	public function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;
		return $this;
	}

}

?>