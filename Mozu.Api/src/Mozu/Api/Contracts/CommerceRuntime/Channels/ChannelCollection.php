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



class ChannelCollection
{
		public $pageCount;
	public function getPageCount() {
		return $this->pageCount;
	}
	
	public function setPageCount($pageCount) {
		$this->pageCount = $pageCount;
		return $this;
	}

		public $pageSize;
	public function getPageSize() {
		return $this->pageSize;
	}
	
	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		return $this;
	}

		public $startIndex;
	public function getStartIndex() {
		return $this->startIndex;
	}
	
	public function setStartIndex($startIndex) {
		$this->startIndex = $startIndex;
		return $this;
	}

		public $totalCount;
	public function getTotalCount() {
		return $this->totalCount;
	}
	
	public function setTotalCount($totalCount) {
		$this->totalCount = $totalCount;
		return $this;
	}

		public $items;
	public function getItems() {
		return $this->items;
	}
	
	public function setItems($items) {
		$this->items = $items;
		return $this;
	}

}

?>