<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP IF & ELSE OPERADORES LOGICOS</title>
	</head>

	<body>

        <?php
           //
           $usuario_possui_cartao_loja = true;
           $valor_compra = 250;

           $valor_frete = 50;
           $recebeu_desconto_frete = true;
            // não é recomendado usar ternário para muitas condições, pois pode ficar difícil de ler, mas é possível fazer aninhamento de ternários aprender sobre para caso achar em algum código.
           $valor_frete_aux = ($usuario_possui_cartao_loja && $valor_compra >= 400) ? 0 : 
                         (($usuario_possui_cartao_loja && $valor_compra >= 300) ? 10 : 
                         (($usuario_possui_cartao_loja && $valor_compra >= 100) ? 25 : $valor_frete));

            $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;
            $valor_frete = $valor_frete_aux;             
            // não é recomendado usar ternário para muitas condições, pois pode ficar difícil de ler, mas é possível fazer aninhamento de ternários aprender sobre para caso achar em algum código.

        //    if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
        //        $valor_frete = 0;
               
        //    } else if($usuario_possui_cartao_loja && $valor_compra>= 300) {
        //        $valor_frete = 10;
               
        //    } else if($usuario_possui_cartao_loja && $valor_compra >= 100) {
        //        $valor_frete = 25;
               
        //    } else {
        //        $recebeu_desconto_frete = false;
        //    }

        ?>   

           <h1> Detalhes do pedido </h1>

           <p> Possui cartão da loja?

            <? echo $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>
            </p>
            
            <p>Valor da compra: <?php echo $valor_compra; ?></p>

            <p>Recebeu desconto no frete ?
                <? echo $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';?> 
            </p>

            <p>Valor do frete: <?php echo $valor_frete; ?></p>

           
		
    </body>

</hml>
