<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Channels;



class ChannelGroup
{
		public $code;
	public function getCode() {
		return $this->code;
	}
	
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

		public $name;
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

		public $tenantId;
	public function getTenantId() {
		return $this->tenantId;
	}
	
	public function setTenantId($tenantId) {
		$this->tenantId = $tenantId;
		return $this;
	}

		public $auditInfo;
	public function getAuditInfo() {
		return $this->auditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->auditInfo = $auditInfo;
		return $this;
	}

}

?>