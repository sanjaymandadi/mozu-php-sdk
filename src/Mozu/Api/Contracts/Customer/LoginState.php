<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	Properties of the login state of a customer account.
*/
class LoginState
{
	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createdOn;

	/**
	*The total number of failed authentication attempts associated with a customer account attempting access.
	*/
	public $failedLoginAttemptCount;

	/**
	*The date and time the initial login was unsuccessful. System-supplied and read only. Each time user authentication fails, an update occurs on this field. The amount of failures is calculated together for `failedLoginAttemptCount`.
	*/
	public $firstFailedLoginAttemptOn;

	/**
	*Indicates if a customer account and associated data is locked. If true, the user account is locked due to multiple failed authentication attempts. The user cannot login until the account is unlocked.
	*/
	public $isLocked;

	/**
	*Indicates if the customer account must have the password changed on login. If true, the login action requires a password change for increased security. If false, the login does not require a password change.
	*/
	public $isPasswordChangeRequired;

	/**
	*Provides date and time data when the customer's account was last locked. System-supplied and read-only.
	*/
	public $lastLockedOn;

	/**
	*Provides the date and time the customer last logged into the store. System-supplied and read-only.
	*/
	public $lastLoginOn;

	/**
	*Date and time the customer's password was last modified. System-supplied and read-only.
	*/
	public $lastPasswordChangeOn;

	/**
	*The number of login attempts remaining for the customer. The user must login successfully before this value reaches zero otherwise the account locks.
	*/
	public $remainingLoginAttempts;

	/**
	*Date and time when the entity was last updated, represented in UTC Date/Time.
	*/
	public $updatedOn;

}

?>
