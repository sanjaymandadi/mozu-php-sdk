<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\AppDev;



class ApplicationVersion
{
		public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
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

		public $auditInfo;
	public function getAuditInfo() {
		return $this->auditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->auditInfo = $auditInfo;
		return $this;
	}

		public $devPackages;
	public function getDevPackages() {
		return $this->devPackages;
	}
	
	public function setDevPackages($devPackages) {
		$this->devPackages = $devPackages;
		return $this;
	}

		public $releasePackage;
	public function getReleasePackage() {
		return $this->releasePackage;
	}
	
	public function setReleasePackage($releasePackage) {
		$this->releasePackage = $releasePackage;
		return $this;
	}

}

?>