<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
			/*
            // recupera a data atual / data corrente
			echo date("d/m/Y H:i:s");

			//
			echo "<br>";

			// recupera a data atual / data corrente
			echo date_default_timezone_get(); 

			echo "<br>";
			
			date_default_timezone_set('America/Sao_Paulo');
			echo "<br>";
			echo date("d/m/Y H:i:s");
            */

			$data_inicial ='2024-06-01';
			$data_final = '2024-06-30';

			// timestamp
			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . ' - ' . $time_inicial;
			echo "<br>";
			echo $data_final . ' - ' . $time_final;

			$diferenca_times = $time_final - $time_inicial;
			echo "<br>";
			echo "Diferença em segundos: " . $diferenca_times;

			// converter segundos para dias

			$segundos_por_dia = 60 * 60 * 24;

			echo "<br>";

			echo 'Um dia possui ' . $segundos_por_dia . ' segundos';

			$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_por_dia;

			echo "<br>";

			echo "Diferença em dias: " . $diferenca_de_dias_entre_as_datas;


			



        ?>    
		
    </body>

</hml>
