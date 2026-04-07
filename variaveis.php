<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            //string 
            $nome = 'Michel Santos';
            //int
            $idade = 36;
            //float
            $peso = 70.5;
            //boolean
            $fumante_sn = false; //(true = 1) ou (false = 0)
        ?>


        <h1>Ficha cadastral</h1>
        <br/>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ? 'Sim' : 'Não' ?></p>
		
    </body>

</hml>
