<?php
// echo '<h1>Hello World</h1>';

$titre = "Debut dans PHP";

$donnee = "Le PHP, c'est facile";

$image ="php-leader1-880x450.png";

?>

<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Premiers pas en PHP</title>
</head>
<body>
<h1><?php echo $titre?></h1>
<p><?php echo $donnee?></p>
<img src="<?php echo $image?>" alt="">

</body>
</html>
