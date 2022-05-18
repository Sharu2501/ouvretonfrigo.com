<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="icon" href="Images/logo.png">
        <title>Ouvre Ton Frigo</title>
		<link href="style.css" rel="stylesheet" media="all" type="text/css" >
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> 
	</head>
	
	<div class="title">
		<img src="Images/logo.png" alt="Image" height="48" width="60"/>
		<h1>σuvrєtσnfrígσ.cσm</h1>
	</div>
	
	<body background="Images/food.jpg">
		<div class="menu">
			<a class="link" href="index.html"><i class="fa fa-home"></i></a>
			<a class="link" href="recettes.php">Toutes nos recettes</a>
			<a class="link" href="fonctionne.php">Fonctionnement du site</a>
			<a class="link" href="decouvre.php">Nous découvrir</a>
			<a class="link" href="decouvre.php">Nous contacter</a>
		</div>
		<p>
		</p>
		<h2 class="titre" align = center>Nos plats mexicains</h2>
		<p>
		</p>

		<?php
		// on se connecte à la base
        $base = new mysqli('localhost', 'root', 'root', 'test');
	
        //commandes SQL d'insertion, valeur 0 pour auto incrémentation
        $sql = 'SELECT* FROM recette WHERE categorie="Mexicain" AND type="Plat"';
        // On lance la requête (mysql_query)
        $req = $base->query($sql); // la flèche fonctionne comme le point en python en POO
		
        if ($req)   // si la requete passe
        {  echo '<table>
                    <tr><th>   </th>
					<th>Nom</th>
                    <th>Type</th>
                    <th>Catégorie</th>
                    </tr> ';

 
        while ($data = mysqli_fetch_array($req)) {
            //on scanne les lignes de la liste obtenue avec la requête
            //chaque colonne est repérée par le nom de la colonne dans la BDD
		echo '<tr><td><a href="'.utf8_encode($data["URL"]).'" target=_blank>
					<img src="'.utf8_encode($data["images"]).'"
					width="250"
					height="180"
					title="'.utf8_encode($data["nom"]).'"></a></td>
					<td>'.utf8_encode($data["nom"]).'</td>
					<td>'.utf8_encode($data["type"]).'</td>
					<td>'.utf8_encode($data["categorie"]).'</td></tr>'; }
        echo '</table></div>';

        }
		
        else //si erreur
        {echo '<p>Erreur SQL !<br />'.$base->error.'</p>';}
            //on ferme la connexion à la base
        mysqli_close ($base);
        ?>
		
		<div class="footer">
			<footer>
				<p> Retrouvez nous sur les différents réseaux sociaux : </p>
				<img width="50" height="40"src="images/insta.png" alt="insta" />
				<img width="50" height="40"src="images/facebook.png" alt="facebook" />
				<img width="70" height="40"src="images/twitter.png" alt="twitter" />
				<img width="85" height="40"src="images/youtube.png" alt="youtube" />
				<img width="50" height="40"src="images/pinterest.png" alt="pinterest" />
					<ul class="list-inline">
						<li class="list-inline-item"><a href="index.html">Home</a></li>
						<li class="list-inline-item"><a href="contact.php">Services</a></li>
						<li class="list-inline-item"><a href="decouvre.php">A propos</a></li>
						<li class="list-inline-item"><a href="contact.php">Plus</a></li>
			
							
					</ul>
					<p class="copyright">ouvretonfrigo.com</p>
			</footer>
		</div>
	</body>
	
</html>
