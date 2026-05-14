<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            //operadopres de comparação e lógicos
            $num = 1;
            echo '-- Início do loop -- <br/>';
            while($num < 10){ //CRITÉRIO DE ENTRADA DO LOOP

                $num += 1; //CRITÉRIO DE PARADA DO LOOP

                if($num == 2 || $num == 6 || $num == 8){
                    continue; //FORÇA A PRÓXIMA INTERAÇÃO DO LOOP
                }

                echo 'Número: ' . $num . '<br/>';
                

                // if($num > 100){
                // break; //FORÇA A SAÍDA DO LOOP
                // }


                
            }

            echo '-- Fim do loop -- <br/>';
            
            
        ?>


        
		
    </body>

</hml>
