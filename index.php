<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Test PHP</title>
    </head>

    <body>
    	<h1> Test PHP</h1>
    	<?php 
    		$world = 'world';
    		$i = 0;
			while ($i < 10) {
		?>		
		
				<h4>Hello <?php echo $world; ?> </h4>
		
		<?php
				$i++;
			}
		?>	

		<h3>Exemple de tableau associatif</h3>
		
		<?php 
			$telephone = array('marque' => 'samsung', 'modèle' => 'galaxy S9', 'prix' => 650);
			echo '<h4> Dans l\'objet \'telephone\' : </h4>';
			foreach ($telephone as $key => $value) {
				echo '<h5>La clé ' . $key . ' vaut ' . $value . '</h5>';
			}
		?>
    </body>

</html>