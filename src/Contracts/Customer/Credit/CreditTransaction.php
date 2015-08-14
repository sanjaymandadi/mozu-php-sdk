<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer\Credit;



/**
*	Properties of a transaction performed for a customer credit that update the remaining balance of the credit.
*/
class CreditTransaction
{
	/**
	*Notes entered and saved with an order. These notes may be entered by a shopper on a wishlist or for an order. Comments may also be entered by Mozu Admins on an order that may be visible only to authorized shoppers and users.
	*/
	public $comments;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*The amount to apply to the credit balance. The defined transaction type determines whether this amount represents a positive or negative integer.
	*/
	public $impactAmount;

	/**
	*The type of transaction, pertaining to the transaction a customer performed or the type of customer credit. For customer credit, you will set the data to Debit to decrease or Credit to update. For the type of transaction, the type includes Order, Return, OrderPickup, or Wishlist.
	*/
	public $transactionType;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>