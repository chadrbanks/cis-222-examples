<?php

/**
 * Class Order
 */

// $myTransaction = new Order( 42 );
class Order
{
	/**
	 * @var
	 */
	private $order_id;
	private $account_id;
	private $order_total;

	/**
	 * Order constructor.
	 */
	function __construct( $oid ){
		$this -> order_id = $oid;
	}

	/**
	 * @return string
	 */
	public function getOrderId()
	{
		return $this->order_id;
	}

	/**
	 * @param string $order_id
	 */
	public function setOrderId(string $order_id)
	{
		if( $order_id == '' )
		{
			throw new Exception('Order Id should not be null!');
		}
		
		$this->order_id = $order_id;
	}

	/**
	 * @return mixed
	 */
	public function getAccountId()
	{
		return $this->account_id;
	}

	/**
	 * @param mixed $account_id
	 */
	public function setAccountId($account_id)
	{
		$this->account_id = $account_id;
	}

	/**
	 * @return mixed
	 */
	public function getOrderTotal()
	{
		return $this->order_total;
	}

	/**
	 * @param mixed $order_total
	 */
	public function setOrderTotal($order_total)
	{
		$this->order_total = $order_total;
	}
}


