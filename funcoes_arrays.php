<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            //true ou false 
        /*
            $array = array('notebook', 'teclado', 'mouse');
            $retorno = is_array($array);

            if($retorno){
                echo 'É um array';
            } else {
                echo 'Não é um array';
            }
        

            $array = [1 => 'a', 7 => 'b', 18 => 'c'];
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            $chaves_array = array_keys($array);
            echo '<pre>';
                print_r($chaves_array);
            echo '</pre>';
            

            $array = array('monitor', 'teclado', 'mouse', 'gabinete', 'notebook');
            echo '<pre>';
                print_r($array);
            echo '</pre>';


            sort($array); //true ou false 
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            

            $array = array('monitor', 'teclado', 'mouse', 'gabinete', 'notebook');
            echo '<pre>';
                print_r($array);
            echo '</pre>';


            asort($array); //true ou false 
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            

            $array = array('monitor', 'teclado', 'mouse', 'gabinete', 'notebook');
            echo '<pre>';
                print_r($array);
                echo 'Quantidade de elementos: ' . count($array);
            echo '</pre>';

            

            $arra1 = ['linux', 'windows', 'mac'];
            $array2 = array ('osx');
            $array3 = ['solaris'];

            $novo_array = array_merge($arra1, $array2, $array3);
            echo '<pre>';
                print_r($novo_array);                
            echo '</pre>';  
            
            

            $string = '26/06/2024';
            $array_retorno = explode('/', $string);
            echo '<pre>';
                echo 'String original: ' . $string . '<br>';
                print_r($array_retorno);
                echo 'Data formatada: ' . $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
            echo '</pre>'; 
            
            */

            $array = ['a', 'b', 'c', 'x', 'y']; //a,b,c,x
            $string_retorno = implode('-', $array); //a,b,c,x,y
            echo '<pre>';
                echo 'Array original: ';
                print_r($array);
                echo 'String retornada: ' . $string_retorno;

            


        ?>


        
		
    </body>

</hml>
