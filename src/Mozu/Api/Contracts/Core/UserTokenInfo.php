<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core;



/**
*	Information stored in the user token.
*/
class UserTokenInfo
{
	/**
	*The access token associated with the user's authentication ticket.
	*/
	public $AccessToken;
	public function getAccessToken() {
		return $this->AccessToken;
	}
	
	public function setAccessToken($accessToken) {
		$this->AccessToken = $accessToken;
		return $this;
	}

}

?>