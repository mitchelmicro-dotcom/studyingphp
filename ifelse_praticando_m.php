<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP IF & ELSE OPERADORES LOGICOS</title>
	</head>

	<body>

        <?php
           //
           $usuario_possui_cartao_loja = false;
           $valor_compra = 99;

           $valor_frete = 50;
           $recebeu_desconto_frete = false;

           if ($usuario_possui_cartao_loja || $valor_compra >= 100) {
               $valor_frete = 0;
               $recebeu_desconto_frete = true;
           }

        ?>   

           <h1> Detalhes do pedido </h1>

           <p> Possui cartão da loja?
                <?php
                      if ($usuario_possui_cartao_loja) {
                            echo 'Sim';
                      } else {
                            echo 'Não';
                      }
                ?> 
            </p>
            
            <p>Valor da compra: <?php echo $valor_compra; ?></p>

            <p>Recebeu desconto no frete ?
                <?php
                      if ($usuario_possui_cartao_loja) {
                            echo 'Sim';
                      } else {
                            echo 'Não';
                      }
                ?> 
            </p>

            <p>Valor do frete: <?php echo $valor_frete; ?></p>

           
		
    </body>

</hml>
