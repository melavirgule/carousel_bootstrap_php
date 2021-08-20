<?php
$hello = "Hello PHP !!!";
$aleat = rand(1,4);
$aleat1 = rand(1,4);
$text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti accusamus minima nemo fuga commodi. Natus obcaecati sapiente consectetur unde dolores sint quidem officia. Officiis dolorum, officia aperiam quos facilis necessitatibus labore praesentium quibusdam sunt repellat quasi quo asperiores aspernatur corrupti fugiat provident laborum dignissimos ab ad ipsum pariatur mollitia nobis alias saepe? Nam facere asperiores temporibus dolores excepturi atque perferendis nisi tenetur, distinctio cupiditate itaque enim, doloremque modi nobis deserunt harum laudantium nemo vitae reiciendis dicta? Molestias nihil dignissimos porro sunt vitae? Ullam velit libero quae atque suscipit alias delectus fuga ad sapiente est, eum amet? Maxime iure in saepe, dolorum, consequatur veniam commodi perferendis harum modi, praesentium placeat qui sed quae atque molestias eligendi? Accusantium facere iure vero quam quasi a dolor molestias? Dolorum?";

$src_img = "images//landscape$aleat.jpg";

$background_img = "images/inde$aleat1.jpg";

// scandir nous permet de recup le contenu du dossier images sous forme de tableau.
// scandir est une fonction qui scanne un dossier et qui retourne un tableau.

$img = scandir("./images/");
echo "<pre>";
//var_dump($img);
// Utilisation d'une boucle foreach pour afficher les img
// Attention à "." et ".." qui ne sont pas des img
foreach ($img as $value) {
    if ($value!="." && $value!="..") {
        echo "<img src='./images/$value' width='100%' alt='images' />";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&family=Style+Script&display=swap" rel="stylesheet">


    <title>PHP dans du HTML</title>
    <style type="text/css">
        body {background-image : url("<?=$background_img?>");}
    </style>

</head>

<body>
    
    <h1><?php echo $hello;?></h1>
    <h2>Voilà un nombre aléatoire: <?php echo $aleat; ?></h2>
    <h3>Le nom de l'image est <?=$src_img?></h3>
    <img src="<?=$src_img?>" width='50%' alt="landscape">

    <p class="p1"><?=$text; ?></p>
    <!--Comme un echo-->




</body>
</html>