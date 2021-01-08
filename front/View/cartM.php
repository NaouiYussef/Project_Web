<?php
class cart
{
	    private $id;
        private $product_name;
        private $product_size;
        private $product_price;
        private $quantity;

		public function getid()
	{
		return $this->id ;
	}

		public function getproduct_size()
	{
		return $this->product_size ;
	}
    
    public function getproduct_name()
	{
		return  $this->product_name ;
	}
    
    public function getproduct_price(){
        return $this->product_price;
    }
    
    public function getquantity(){
       return $this->quantity;
    }
    




	public function setproduct_size($product_size)
	{
		$this->product_size=$product_size ;
	}
	public function setproduct_name($product_name)
	{
		 $this->product_name=$product_name ;
	}
	public function setproduct_price($product_price)
	{
		$this->product_price=$product_price ;
	}
	public function setquantity($quantity)
	{
		$this->quantity=$quantity  ;
	}



	public function __construct($product_size,$product_name,$product_price,$quantity)
	{ 
		$this->product_size=$product_size ;
		$this->product_name=$product_name ;
		$this->product_price=$product_price;
        $this->quantity=$quantity;
	}
}
?>
