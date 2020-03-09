<?php
// echo '<h1>Hello World</h1>';

$titre = "Debut dans PHP";

$donnee = "Le PHP, c'est facile";

$image ="php-leader1-880x450.png";

$bonjour ="Bonjour";

$formulaire = [
    ['nom' => 'Dupont', 'prenom' => 'Jean', 'email'=> 'jdupont@gmail.com'],
    ['nom' => 'Dupuis', 'prenom' => 'Loïc', 'email'=> 'loic45000@gmail.com'],
    ['nom' => 'Armand', 'prenom' => 'Edgard', 'email'=> 'armand-e@gmail.com'],
    ['nom' => 'Durand', 'prenom' => 'Emilie', 'email'=> 'emiliedurand@gmail.com'],
    ['nom' => 'Martin', 'prenom' => 'Justine', 'email'=> 'juju289@gmail.com']
];

$new =['nom'=> $_GET['nom'], 'prenom' => $_GET['prenom'], 'email'=> $_GET['email']];
var_dump($new);

array_push($formulaire, $new);


$nbelem = sizeof($formulaire);
$liste = "";

for ($i=0; $i<$nbelem; $i++){
   $liste .= "<li>".$formulaire[$i]["nom"]. "</li>";
}

var_dump($_GET);

?>


<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Premiers pas en PHP</title>
</head>
<body>

<h1>Voici la liste des utilisateurs</h1>
<ul><?= $liste?></ul>

</body>
</html>
