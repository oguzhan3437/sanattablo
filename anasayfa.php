<?php
if($_FILES){
echo $_FILES["dosya"]["name"];
$maxBoyut     =500000;
$dosyaUzantisi=substr($_FILES["dosya"]["name"],-4,4);
$dosyaAdi     =rand(1,9999).$dosyaUzantisi;
$dosyaYolu    ="dosyalar/".$dosyaAdi;
$dosyaBoyut=$_FILES["dosya"]["size"];

if($_FILES["dosya"]["size"]>$maxBoyut){
	echo "çok büyük malesef yüklenemez";
}
else{
	$dosyaTipi=$_FILES["dosya"]["type"];

		if($dosyaTipi== "image/jpeg" || $dosyaTipi=="image/png"){
				if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
					$tasi=move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);
					$query=$db->prepare("INSERT INTO resimler(resim_adi,resim_size,resim_turu) VALUES (?,?,?)");

					$query->execute(array($dosyaAdi,$dosyaBoyut,$dosyaTipi));
					

										
				}else{
				echo "bir hata";
				}

		}else {
		echo	"dosya formatı uygun değil";

		}

}


}else {
	?>
  <div class="dosya">
	<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="dosya"/>
	<button  type="submit">yükle</button>
	</form>

	</div>

	<?php 
	 $resim=$db->query("SELECT * FROM resimler ");
	 foreach($resim as $row){ ?>
	
	    <img src="7753.png" width="200" height="200"/>
	   <a >sil</a>
	 <?php
	 echo	$row["resim_adi"];?>
  






	<?php }



	?>
<?php
}
?>