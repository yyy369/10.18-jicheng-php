<?php
header("Content-type: text/html; charset=utf-8");
Class Goods{
     var $name;
     var $num;
     var $pay;
    function __construct($name,$num,$pay){
    	$this->name=$name;
    	$this->num=$num;
    	$this->pay=$pay;
    }
    public function printall(){
    	echo "商品名:".$this->name.'数量:'.$this->num.'价格:'.$this->pay."<br/>";
    }
} 
class phone extends Goods{
    public $brand;
    function __construct($name,$num,$pay,$brand){
    parent::__construct();
    $this->brand=$brand;
    }
    public function printall(){
    echo "商品名:".$this->name.'数量:'.$this->num.'价格:'.$this->pay.'品牌:'.$this->brand."<br/>";
    }
}
$p1=new phone('手机',10,2000,'华为');
$p1->printall();