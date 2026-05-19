<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP IF & ELSE OPERADORES LOGICOS</title>
	</head>

	<body>

        <?php
            //operadores de comparação/condicionais
            //== comparação de valor
            // === comparação de valor e tipo
            // != comparação de valor diferente
            //<> comparação de valor diferente
            // !== comparação de valor e tipo diferente
            //< comparação de valor menor
            //> comparação de valor maior
            // <= comparação de valor menor ou igual
            // >= comparação de valor maior ou igual

            //operadores lógicos
            // && operador lógico AND (E) retorna verdadeiro se ambas as expressões forem verdadeiras
            // || operador lógico OR (OU) retorna verdadeiro se pelo menos uma das expressões for verdadeira
            // ! operador lógico NOT (NÃO) inverte o valor lógico de uma expressão
            // xor operador lógico XOR (OU exclusivo) retorna verdadeiro se exatamente uma das expressões for verdadeira
            
            //f = !(f) = v

            if((22 == 22 && 3 == 3) || 5 != 5) { 
                echo 'Verdadeiro'; 
            }else{
                echo 'Falso';
            }

        ?>   
		
    </body>

</hml>
