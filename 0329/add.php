<?php
if( !isset($_POST["prod"]) || !isset($_POST['price'])
	|| empty($_POST['price']) || !is_int($_POST['price'])
	|| empty($_POST['prod']) )
{
	echo '����';
	exit;
}
//$db = new PDO('�s�u�r��',�b��,�K�X,�B�~�Ѽ�);
//$db = new PDO('mysql:host=localhost;dbname=test0329;charset=utf8'
//	,'mememe','123456' );
try {
	$db = new PDO('mysql:host=localhost;dbname=test0329;charset=utf8'
		,'mememe','123456', array( 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		) );
}catch(PDOException $err) {
	echo "ERROR:";
	echo $err->getMessage();
	exit;
}
echo "�s�u���\";
$stmt = $db->prepare("insert into moneybook (name,cost) values (?,?)");
$stmt->execute([$_POST["prod"], $_POST['price']]);
echo "�s�W�F";
echo $stmt->rowCount();
echo "�����";