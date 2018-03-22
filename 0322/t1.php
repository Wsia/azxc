<?php
$a="預設值";
if(!isset($_GET['XXX'])){
	echo"請乖乖設定參數XXX";
}else{
	$a=$_GET['XXX'];
}

echo $a;