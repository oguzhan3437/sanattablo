<html>
	
<body>
	<?php
	include("ayar.php");

$do=@$_GET["do"];
	switch($do){

		case "sil":
		include("sil.php");


		break;

	
		default:
		
		include("anasayfa.php");

		break;
	}


	?>

</body>



</html>