<?php

$dosya_ad=$_GET["resim_adi"];

$sorgu=$db->prepare("DELETE FROM resimler where resim_adi=?");
$sorgu->execute(array($dosya_ad));
unlink($dosya_ad);
if($sorgu){
	header("refresh:2; url=index.php");
}
else{
	echo "dosya silinemedi";
}
?>