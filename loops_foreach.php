<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            
			$itens = array('sofa', 'mesa', 'cadeira', 'estante', 'cama');

			echo '<pre>';
			print_r($itens);
			echo '</pre>';

			foreach($itens as $item){
				echo "$item <br/>";

				if($item == 'estante') {
					echo " (*Compre uma estante e ganhe 25% de desconto!)<br/> ";
				}

				echo "<hr/>";

			}
            
            
        ?>


        
		
    </body>

</html>
