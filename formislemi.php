<?php

//aynı sayfadan veri alı gönderme--------------

 if(empty($_POST["id"])) { ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="number" data-required="yes" name="id" placeholder="Kullanıcı ID" size="40">
<button type="submit" formmethod="post" formaction="<?php echo $_SERVER['PHP_SELF']; ?>">Devam</button>
</form>
<?php } else {
echo $_POST["id"]; ?> numaralı ID adına işlem yapıyorsunuz.
<?php } ?>