<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Shipping;



class SiteShippingSignatureRequirement
{
		public $isSignatureRequired;
	public function getIsSignatureRequired() {
		return $this->isSignatureRequired;
	}
	
	public function setIsSignatureRequired($isSignatureRequired) {
		$this->isSignatureRequired = $isSignatureRequired;
		return $this;
	}

		public $minimumValueThreshold;
	public function getMinimumValueThreshold() {
		return $this->minimumValueThreshold;
	}
	
	public function setMinimumValueThreshold($minimumValueThreshold) {
		$this->minimumValueThreshold = $minimumValueThreshold;
		return $this;
	}

}

?>